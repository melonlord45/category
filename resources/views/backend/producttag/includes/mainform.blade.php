<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('product_id', 'Product *',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::select('product_id',$data['product'],null,['class' =>'form-control', 'id'=>'product_id','placeholder'=>'Select Catagory Id'])}}
            @include('backend.includes.validationerror',['fieldname'=>'product_id'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('tag_id', 'Tag *',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::select('tag_id',$data['tag'],null,['class' =>'form-control', 'id'=>'tag_id','placeholder'=>'Select Sub Catagory Id'])}}
            @include('backend.includes.validationerror',['fieldname'=>'tag_id'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name *',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('name',null,['class' =>'form-control', 'id'=>'name','placeholder'=>'Name'])}}
            @include('backend.includes.validationerror',['fieldname'=>'name'])
        </div>
    </div>




<div class="card-footer">
    {{ Form::button('Submit',['type'=>'submit','class'=>'btn btn-primary']) }}
  </div>
{{ Form::close() }}
</div>
