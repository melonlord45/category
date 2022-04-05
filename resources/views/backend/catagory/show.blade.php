@extends('backend.layouts.app',['panel' => 'Catagory', 'page'=>'Show'])

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

                    <th>Image</th>
                    <td><img src="{{ asset('images/catagory/'.$data['row']->image) }}" class="image-fluid" width="160px" height="160px"> </td>
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

                    <th>Rank</th>
                    <td>{{$data['row']->rank}}</td>
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
