@extends('products.layout')

@section('content')

<h1>Voici l'article avec l'id : {{ $product->id }}</h1> 
<div class="row">
    
    <div class="col-xs-12 col-m-12 col-md-12">
        <div class=" form-group" >
            <strong>Name:</strong>
            {{ $product->name }} 
        </div>
    </div>
    <div class="col-xs-12 col-m-12 col-md-12"> 
        <div class=" form-group" >
            <strong>Details:</strong>
            {{ $product->detail }} 
        </div>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class=" pull-left" >
            
            <a class="btn btn-primary   " href=" {{ route('products.index') }}  ">Back to the list</a>
    </div>
</div>
      
</div>
 
@endsection 