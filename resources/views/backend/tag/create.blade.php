@extends('backend.layouts.app',['panel' => 'Tags','page' => 'Create'])

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
                <a class="btn btn-primary btn-md float-right" href="{{route('tag.index')}}">
                    <i class="fas fa-list">
                    </i>
                   List
                </a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{ Form::open(['route'=>'tag.store','method'=>'post','files'=>true]) }}


              @include('backend.tag.includes.mainform')
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
