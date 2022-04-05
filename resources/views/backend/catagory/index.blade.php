@extends('backend.layouts.app',['panel' => 'Catagory' , 'page' => 'List'])
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

        @include('backend.includes.flashmessage')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Catagory</h3>
                <a class="btn btn-success btn-md float-right" href="{{route('catagory.create')}}">
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
                    <th>Slug</th>
                    <th>Rank</th>
                    <th>Created Date</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>

              @foreach($data['rows'] as $row)
                  <tr class >
                    <td>{{ $loop->iteration}} </td>


                    <td>{{ $row->name }}</td>
                    <td>{{ $row->slug }} </td>
                    <td>{{ $row->rank }} </td>
                    <td>{{ $row->created_at->diffForHumans()}}</td>


                    <td style="display: flex">
                    <a class="btn btn-primary btn-sm mr-2" href="{{route('catagory.show',['slug'=> $row->slug]) }}">
                        <i class="fas fa-folder">
                        </i>
                        Show
                    </a>
                    <a class="btn btn-info btn-sm mr-2" href="{{route('catagory.edit',['slug'=> $row->slug]) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                        <form action="{{ route('catagory.delete',['slug'=> $row['slug']]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button  class="btn btn-danger btn-sm delete-confirm" type="button">
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
<script src="{{ asset('dist/js/alert.js') }}"></script>
<script>
    $(function () {
      $('#table').DataTable();

    });

    $(".delete-confirm").click(function(){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
        $(this).closest("form").submit();
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
    )
  }
});
    })

  </script>
@endsection
