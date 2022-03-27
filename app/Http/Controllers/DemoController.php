<?php

namespace App\Http\Controllers;
use App\Models\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function __construct(){
        $this->model = new Demo();
    }
    public function demoindex(){

        $date = [];
        $data['rows'] = $this->model->latest() ->get();  // select * from tests
           return view('backend.demo.demoindex',compact('data'));
       }
       public function democreate(){
        return view('backend.demo.democreate');
    }
        public function store(Request $request){
            $request ->validate([
                'name'=>'required',
               'email'=>'required'
            ]
            );
            try{
                $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');

            }catch(\Exception $e){
                session()->flash('error_message', 'Data Insertion Failed');
            }


            return redirect()->route('demo.demoindex');
        }

        public function show($id){
            $data = [];
            $data['row'] = $this->model->findOrFail($id);

            return view('backend.demo.demoshow',compact('data'));
        }
        public function edit($id){
            $data = [];
            $data['row'] = $this->model->find($id);

            return view('backend.demo.demoedit',compact('data'));
        }

        public function update(Request $request,$id){
            $request ->validate([
                'name'=>'required',
                'email'=>'required'
            ]);

            $data['row'] = $this->model->findorFail($id);

            $data['row']->update($request->all());

            session()->flash('success_message','Data Updated Successfully');

            return redirect()->route('demo.demoindex');
        }
        public function delete($id){


            $data['row'] = $this->model->findorFail($id);

            $data['row']->delete();
            session()->flash('success_message','Data Deleted Successfully');

            return redirect()->route('demo.demoindex');
        }
    }







