<div class="card-body">
    <div class="form-group row mb-3">
        {{ Form::label('catagory_id', 'Catagory*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::select('catagory_id',$data['catagories'],null,['class' =>'form-control', 'id'=>'catagory_id','placeholder'=>'Select Catagory Id'])}}
            @include('backend.includes.validationerror',['fieldname'=>'catagory_id'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('subcatagory_id', 'Subcatagory*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::select('subcatagory_id',$data['subcatagories'],null,['class' =>'form-control', 'id'=>'subcatagory_id','placeholder'=>'Select Sub Catagory Id'])}}
            @include('backend.includes.validationerror',['fieldname'=>'subcatagory_id'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('name',null,['class' =>'form-control', 'id'=>'name','placeholder'=>'Name'])}}
            @include('backend.includes.validationerror',['fieldname'=>'name'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('slug', 'Slug*',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('slug',null,['class' =>'form-control', 'id'=>'slug','placeholder'=>'Slug'])}}
            @include('backend.includes.validationerror',['fieldname'=>'slug'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('code', 'Code',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::number('code',null,['class' =>'form-control', 'id'=>'code','placeholder'=>'Code'])}}
            @include('backend.includes.validationerror',['fieldname'=>'code'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('s_description', 'Short Description',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('s_description',null,['class' =>'form-control', 'id'=>'s_description','placeholder'=>'Short Description', 'rows'=>2])}}
            @include('backend.includes.validationerror',['fieldname'=>'s_description'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('description', 'Description',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::textarea('description',null,['class' =>'form-control', 'id'=>'description','placeholder'=>'Despription', 'rows'=>4])}}
            @include('backend.includes.validationerror',['fieldname'=>'description'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('price', 'Price',['class' => 'col-3 col-form-label','step'=>'0.001']) }}
        <div class="col-6">
        {{ Form::number('price',null,['class' =>'form-control', 'id'=>'price','placeholder'=>'Price'])}}
            @include('backend.includes.validationerror',['fieldname'=>'price'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('quantity', 'Quantity',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::number('quantity',null,['class' =>'form-control', 'id'=>'quantity','placeholder'=>'Quantity'])}}
            @include('backend.includes.validationerror',['fieldname'=>'quantity'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('stock', 'Stock',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::number('stock',null,['class' =>'form-control', 'id'=>'stock','placeholder'=>'Stock'])}}
            @include('backend.includes.validationerror',['fieldname'=>'stock'])
        </div>
    </div>
     <div class="form-group row">
        <div class="col-3">
            {{Form::label('feature_key','Feature Key',['class'=>'radiofeaturekey'])}}

        </div>
        <div class="col-9">
            <label class="radio-inline">
            {!! Form::radio('feature_key', 1, true) !!}Yes</label>
            <label class="radio-inline">
                {!! Form::radio('feature_key', 0, false) !!}No</label>
            </label>

        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            {{Form::label('flash_key','Flash Key',['class'=>'radioflashkey'])}}

        </div>
        <div class="col-9">
            <label class="radio-inline">
            {!! Form::radio('flash_key', 1, true) !!}Yes</label>
            <label class="radio-inline">
                {!! Form::radio('flash_key', 0, false) !!}No</label>
            </label>

        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('meta_title', 'Meta Title',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('meta_title',null,['class' =>'form-control', 'id'=>'meta_title','placeholder'=>'Meta Title'])}}
            @include('backend.includes.validationerror',['fieldname'=>'meta_title'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('meta_keyword', 'Meta Keyword',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::text('meta_keyword',null,['class' =>'form-control', 'id'=>'meta_keyword','placeholder'=>'Meta Keyword'])}}
            @include('backend.includes.validationerror',['fieldname'=>'meta_keyword'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('meta_description', 'Meta Description',['class' => 'col-3 col-form-label']) }}
        <div class="col-6">
        {{ Form::textarea('meta_description',null,['class' =>'form-control', 'id'=>'meta_description','placeholder'=>'Meta Description', 'rows'=>4])}}
            @include('backend.includes.validationerror',['fieldname'=>'meta_description'])
        </div>

    </div>

    <div class="form-group row">
        <div class="col-3">
            {{Form::label('status','Status',['class'=>'radiostatus'])}}

        </div>
        <div class="col-9">
            <label class="radio-inline">
            {!! Form::radio('status', 1, true) !!}Active</label>
            <label class="radio-inline">
                {!! Form::radio('status', 0, false) !!}In-Active</label>
            </label>

        </div>
    </div>





</div>
<div class="card-footer">
    {{ Form::button('Submit',['type'=>'submit','class'=>'btn btn-primary']) }}
  </div>
{{ Form::close() }}
</div>
