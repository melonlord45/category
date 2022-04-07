<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    private $model;
    protected $view_path='backend.tag.';

    public function __construct(){
        $this->model = new Tag();
    }
    public function index(){

        $date = [];
        $data['rows'] = $this->model->latest()->get();  // select * from tests
           return view($this->view_path.'index',compact('data'));
       }
       public function create(){
           $data=[];

        return view($this->view_path.'create',compact('data'));
    }
        public function store(Request $request){
            $request ->validate([

                'name'=>'required|string|max:255',

                'slug'=>'required|string|max:255'

            ]
            );

            try{
               $request->request->add(['created_by' => auth()->user()->id]);

               $this->model->create($request->all());

            session()->flash('success_message','Data Inserted Successfully');

            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }


            return redirect()->route('tag.index');
        }

        public function show($slug){
            $data = [];
            $data['row'] = $this->model->where('slug',$slug)->first();

            return view($this->view_path.'show',compact('data'));
        }
        public function edit($slug){
            $data = [];
            $data['row'] = $this->model->where('slug',$slug)->first();


            return view($this->view_path.'edit',compact('data'));
        }

        public function update(Request $request,$slug){
            $request ->validate([

                'name'=>'required',

            ]);
            try{
                $data['row'] = $this->model->where('slug',$slug)->first();


            $data['row']->update($request->all());

            session()->flash('success_message','Data Updated Successfully');
            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }

            return redirect()->route($this->view_path.'index');
        }
        public function delete(Request $request,$slug){


            $data['row'] = $this->model->where('slug',$slug)->first();

            $data['row']->delete();
            session()->flash('success_message','Data Deleted Successfully');

            return redirect()->route($this->view_path.'index');
        }
    }



