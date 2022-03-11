@extends('products.layout')

@section('content')

<h1>Create Products</h1>(create.blade.php)
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class=" pull-right" >
            
        <a class="btn btn-primary text-danger " href=" {{ route('products.index') }}  ">Back</a>
     </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    WAOUW information non valide 
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{  $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST" >
    @csrf
    
      <label for="name">Name</label>
      <input type="text"  name="name" class="form-control" placeholder="Namel" id="name">
    </div>
    <div class="form-group">
        <label for="detail">Detail:</label>
        <textarea name="detail" class="form-control" rows="5" id="detail"></textarea>
    </div>
     <div class="form-group" >
        <button type="submit" class="btn btn-primary center ">Valider</button>
     </div>
    
  </form> 

@endsection 