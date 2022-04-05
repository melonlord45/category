<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatagory;

class SubCatagorycontroller extends Controller
{
    public function __construct(){
        $this->model = new Subcatagory();
    }
    public function index(){

        $date = [];
        $data['rows'] = $this->model->latest()->get();  // select * from tests
           return view('backend.subcatagory.index',compact('data'));
       }
       public function create(){
        return view('backend.subcatagory.create');
    }
        public function store(Request $request){
            $request ->validate([
                'name'=>'required|string|max:255',
                'rank'=>'required|integer',
                'slug'=>'required|string|max:255'


            ]
            );
            //image upload
            if($request -> hasFile('image_field')){
                $image = $request->file('image_field');
                $image_name = time().'_'.$image->getClientOriginalName();
                $image->move('images/subcatagory',$image_name);
                $request->request->add(['image'=>  $image_name]);
            }
            try{
               $request->request->add(['created_by' => auth()->user()->id]);

               $this->model->create($request->all());

            session()->flash('success_message','Data Inserted Successfully');

            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }


            return redirect()->route('subcatagory.index');
        }

        public function show($slug){
            $data = [];
            $data['row'] = $this->model->where('slug',$slug)->first();

            return view('backend.subcatagory.show',compact('data'));
        }
        public function edit($slug){
            $data = [];
            $data['row'] = $this->model->where('slug',$slug)->first();


            return view('backend.subcatagory.edit',compact('data'));
        }

        public function update(Request $request,$slug){
            $request ->validate([
                'name'=>'required'

            ]);
            try{
                $data['row'] = $this->model->where('slug',$slug)->first();


            $data['row']->update($request->all());

            session()->flash('success_message','Data Updated Successfully');
            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }

            return redirect()->route('subcatagory.index');
        }
        public function delete(Request $request,$slug){


            $data['row'] = $this->model->where('slug',$slug)->first();

            $data['row']->delete();
            session()->flash('success_message','Data Deleted Successfully');

            return redirect()->route('subcatagory.index');
        }
    }

