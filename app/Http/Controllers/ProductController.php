<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\SubCatagory;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->model = new Product();
    }
    public function index(){

        $date = [];
        $data['rows'] = $this->model->latest()->get();
           return view('backend.product.index',compact('data'));
       }
       public function create(){
           $data=[];
        $data['catagories'] = Catagory::pluck('name','id');
        $data['subcatagories'] = SubCatagory::pluck('name','id');

        return view('backend.product.create',compact('data'));
    }
        public function store(Request $request){
            $request ->validate([
                'catagory_id'=>'required',
                'subcatagory_id'=>'required',
                'name'=>'required|string|max:255',
                'slug'=>'required|string|max:255'
             ],
             ['catagory_id.required'=>'Select Catagory Id first.'],
            ['subcatagory_id.required'=>'Select Subcatagory Id first.']
            );

            try{
               $request->request->add(['created_by' => auth()->user()->id]);

               $this->model->create($request->all());

            session()->flash('success_message','Data Inserted Successfully');

            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }


            return redirect()->route('product.index');
        }

        public function show($slug){
            $data = [];
            $data['row'] = $this->model->where('slug',$slug)->first();

            return view('backend.product.show',compact('data'));
        }
        public function edit($slug){
            $data = [];
            $data['catagories'] = Catagory::pluck('name','id');
            $data['subcatagories'] = Subcatagory::pluck('name','id');

            $data['row'] = $this->model->where('slug',$slug)->first();


            return view('backend.product.edit',compact('data'));
        }

        public function update(Request $request,$slug){
            $request ->validate([
                'catagory_id'=>'required',
                'name'=>'required',

            ]);
            try{
                $data['row'] = $this->model->where('slug',$slug)->first();


            $data['row']->update($request->all());

            session()->flash('success_message','Data Updated Successfully');
            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }

            return redirect()->route('product.index');
        }
        public function delete(Request $request,$slug){


            $data['row'] = $this->model->where('slug',$slug)->first();

            $data['row']->delete();
            session()->flash('success_message','Data Deleted Successfully');

            return redirect()->route('product.index');
        }
    }

