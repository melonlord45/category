@extends('backend.layouts.app',['panel' => 'Product', 'page'=>'Edit'])

@section('title','Home')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{ Form::model($data['row'],['route'=>['product.update', $data['row']->id], 'method'=>'put']) }}
                <div class="card-body">


                    <div class="card-body">
                        @include('backend.product.includes.mainform')

</div>
{{ Form::close() }}
</div>


                    </div>
                  </div>
                   </div>

                </div>
                <!-- /.card-body -->

              </form>
            </div>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection
