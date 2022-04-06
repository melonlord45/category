@extends('backend.layouts.app',['panel' => 'Product','page' => 'Create'])

@section('title','Home')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
              <div class="card-header">
                <h3 class="card-title">Insert Data</h3>
                <a class="btn btn-primary btn-md float-right" href="{{route('product.index')}}">
                    <i class="fas fa-list">
                    </i>
                   List
                </a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{ Form::open(['route'=>'product.store','method'=>'post','files'=>true]) }}


              @include('backend.product.includes.mainform')
              {{ Form::close()}}



                    </div>
                  </div>
                   </div>

                </div>


          </div>

        </div>

      </div>
    </section>

  </div>


@endsection
