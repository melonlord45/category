@extends('backend.layouts.app',['panel' => 'Demo', 'page'=>'Show'])

@section('title','Home')

@section('content')
<div class="row">
          <div class="col-12">

            <table class="table tabble-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
                <tr>
                    <td>{{$data['row']->id}}
                    <td>{{$data['row']->name}}
                    <td>{{$data['row']->email}}
                    <td>{{$data['row']->created_at}}
                    <td>{{$data['row']->updated_at}}
                </tr>
            </table>

          </div>

        </div>
@endsection
