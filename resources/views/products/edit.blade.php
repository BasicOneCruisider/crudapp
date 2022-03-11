@extends('products.layout')

@section('content')
    <h1>EDIT ARticle</h1>(create.blade.php)
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class=" pull-right">

                <a class="btn btn-primary text-danger " href=" {{ route('products.index') }}  ">Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                WAOUW information non valide
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12col-m-12col-md-12">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" value=" {{ $product->name }}" class="form-control"
                            placeholder="Name" id="name">
                    </div>
                </div>
                <div class="col-xs-12col-m-12col-md-12">

                    <label for="detail">Detail:</label>
                    <textarea name="detail" class="form-control" rows="5" id="detail">  {{ $product->detail }}</textarea>
                </div>
                <div class="  col-xs-12col-m-12col-md-12 text-center ">
                    <button type="submit" class="btn btn-primary center ">Valider</button>
                </div>
            </div>

        </form>
    @endsection
