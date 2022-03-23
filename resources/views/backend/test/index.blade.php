@extends('backend.layouts.app')

@section('title','Home')

@section('content')
<div class="row">
          <div class="col-12">
          @if(session()->has('success_message'))
          <div class="alert alert-success alert-dismissible">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  {{session()->get('success_message')}}
                </div>
                @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>

              @foreach($data['rows'] as $row)
                  <tr>
                    <td>{{ $loop->iteration}} </td>


                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }} </td>
                    <td>{{ $row->created_at}}</td>
                    <td style="display:flex" >
                      <a href="{{route('test.show',['id'=> $row->id]) }}" class="btn-success m-1">Show</a>
                      <a href="{{route('test.edit',['id'=> $row->id]) }}" class="btn-info m-1">Edit</a>
                    </td>

                    <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="{{route('test.show',['id'=> $row->id]) }}">
                        <i class="fas fa-folder">
                        </i>
                        Show
                    </a>
                    <a class="btn btn-info btn-sm" href="{{route('test.edit',['id'=> $row->id]) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>

                  </tr>
                  @endforeach

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection
