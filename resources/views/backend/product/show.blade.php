@extends('backend.layouts.app',['panel' => 'Product', 'page'=>'Show'])

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

                    <th>Catagory</th>
                    <td>{{$data['row']->catagory->name}} </td>

                </tr>

                <tr>

                    <th>Sub Catagory</th>
                    <td>{{$data['row']->subcatagory->name}} </td>

                </tr>
                    <tr>
                    <th>Name</th>
                    <td>{{$data['row']->name}} </td>

                </tr>

                <tr>

                    <th>Slug</th>
                    <td>{{$data['row']->slug}}</td>
                </tr>
                        <tr>

                    <th>Price</th>
                    <td>{{$data['row']->price}}</td>
                        </tr>
                        <tr>

                            <th>Quanity</th>
                            <td>{{$data['row']->quantity}}</td>
                                </tr>
                                <tr>

                                    <th>Stock</th>
                                    <td>{{$data['row']->stock}}</td>
                                        </tr>
                        <tr>

                    <th>Short Description</th>
                    <td>{{$data['row']->short_description}}</td>
                        </tr>
                        <tr>

                    <th>Description</th>
                    <td>{{$data['row']->description}}</td>
                        </tr>
                        <tr>

                    <th>Created At</th>
                    <td>{{$data['row']->created_at}}</td>
                        </tr>



            </table>

          </div>

        </div>
@endsection
