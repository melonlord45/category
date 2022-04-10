<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Product;
use App\Models\ProductTag;


use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    private $model;
    protected $view_path='backend.producttag.';

    public function __construct(){
        $this->model = new ProductTag();
    }
    public function index(){

        $date = [];
        $data['rows'] = $this->model->latest()->get();  // select * from tests
           return view($this->view_path.'index',compact('data'));
       }
       public function create(){

           $data=[];
           $data['product'] = Product::pluck('name','id');
           $data['tag'] = Tag::pluck('name','id');

        return view($this->view_path.'create',compact('data'));
    }
        public function store(Request $request){
            $request ->validate([

                'name'=>'required|string|max:255',

            ]
            );

            try{
               $request->request->add(['created_by' => auth()->user()->id]);

               $this->model->create($request->all());

            session()->flash('success_message','Data Inserted Successfully');

            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }


            return redirect()->route('producttag.index');
        }

        public function show($id){
            $data = [];
            $data['row'] = $this->model->where('id',$id)->first();

            return view($this->view_path.'show',compact('data'));
        }
        public function edit($id){
            $data = [];
            $data['product'] = Product::pluck('name','id');
            $data['tag'] = Tag::pluck('name','id');
            $data['row'] = $this->model->where('id',$id)->first();


            return view($this->view_path.'edit',compact('data'));
        }

        public function update(Request $request,$id){
            $request ->validate([

                'name'=>'required',

            ]);
            try{
                $data['row'] = $this->model->where('id',$id)->first();


            $data['row']->update($request->all());

            session()->flash('success_message','Data Updated Successfully');
            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }

            return redirect()->route('producttag.index');
        }
        public function delete(Request $request,$id){


            $data['row'] = $this->model->where('id',$id)->first();

            $data['row']->delete();
            session()->flash('success_message','Data Deleted Successfully');

            return redirect()->route('producttag.index');
        }
}
