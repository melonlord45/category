@extends('backend.layouts.app',['panel' => 'Demo', 'page'=>'List'])
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"">
@endsection
@section('title','Home')

@section('content')
<div class="row">
          <div class="col-12">
          @if(session()->has('success_message'))
          <div class="alert alert-success alert-dismissible">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Congo!</h5>
                  {{session()->get('success_message')}}
                </div>
                @endif

                @if(session()->has('error_message'))
          <div class="alert alert-danger alert-dismissible">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-uncheck"></i> Alert!</h5>
                  {{session()->get('error_message')}}
                </div>
                @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Demo</h3>
                <a class="btn btn-success btn-md float-right" href="{{route('demo.democreate')}}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Create
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover">
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
                  <tr class >
                    <td>{{ $loop->iteration}} </td>


                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }} </td>

                    <td>{{ $row->created_at->format('d-m-Y')}}</td>


                    <td style="display: flex">
                    <a class="btn btn-primary btn-sm mr-2" href="{{route('demo.demoshow',['id'=> $row->id]) }}">
                        <i class="fas fa-folder">
                        </i>
                        Show
                    </a>
                    <a class="btn btn-info btn-sm mr-2" href="{{route('demo.demoedit',['id'=> $row->id]) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                        <form action="{{ route('demo.demodelete',['id'=> $row['id']]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="confirm('Are You Sure?')" class="btn btn-danger btn-sm" type="submit">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                            </button>
                        </form>

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

@section('js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $('#table').DataTable();

    });
  </script>
@endsection
