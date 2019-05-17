@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new event</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'OffersController@store', 'files' => false, 'class' => 'form-horizontal']) !!}
                    <!--    auth save ??  -->
                    <div class="form-group row">
                    {!! Form::label('product', 'Product name', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('product', $name, '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                     @if ($errors->has('product'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('product') }}</strong>
                        </span>
                    @endif 
                    
                    <div class="form-group row">
                    {!! Form::label('price', 'Price of the product', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('price', '', ['class' => 'form-control']) !!}                     
                    </div></div>
                    
                    <div class="form-group row">
                    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('country', '', ['class' => 'form-control']) !!}                  
                    </div>
                    </div>  
                    
                    <div class="form-group row">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control']) !!}                  
                    </div>
                    </div>                    
                    {!! Form::submit('submit data', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 