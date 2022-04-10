@extends('backend.layouts.app',['panel' => 'Product Tags', 'page'=>'Show'])

@section('title','Home')

@section('content')
<div class="row">
          <div class="col-12">

            <table class="table tabble-striped">
                <tr>
                    <th>Id</th>
                    <td>{{$data['row']->id}} </td>
                </tr>

                <tr>

                    <th>Name</th>
                    <td>{{$data['row']->name}} </td>

                </tr>
                <tr>

                    <th>Product Id</th>
                    <td>{{$data['row']->product_id}}</td>
                </tr>
                <th>Tag Id</th>
                    <td>{{$data['row']->tag_id}}</td>
                </tr>
                        <tr>


                    <th>Created At</th>
                    <td>{{$data['row']->created_at}}</td>
                        </tr>



            </table>

          </div>

        </div>
@endsection
