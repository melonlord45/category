<div class="card-body">
    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('name',null,['class' =>'form-control', 'id'=>'name','placeholder'=>'Name'])}}
            @include('backend.includes.validationerror',['fieldname'=>'name'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('email', 'Email*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('email',null,['class' =>'form-control', 'id'=>'email','placeholder'=>'Email'])}}
        @include('backend.includes.validationerror',['fieldname'=>'name'])

        </div>
    </div>


</div>
<div class="card-footer">
    {{ Form::button('Submit',['type'=>'submit','class'=>'btn btn-primary']) }}
  </div>
{{ Form::close() }}
</div>
