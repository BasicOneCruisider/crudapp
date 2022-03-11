@extends('products.layout')
@section('content')


    <div class="row">
        <div class="col-12">
            <div class="pull-left">
                <h2>laravel crud example</h2>
            </div>
            <div class="pull-right">
                <a href=" {{ route('products.create') }} " class="btn btn-success"> creer nouvel article</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-sucess">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="300px">ACTION</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td> {{ $product->id }} </td>
                <td> {{ $product->name }} </td>
                <td> {{ $product->detail }} </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"> 
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>@endforeach
    </table>
    {{  $products->links() }}
    


@endsection
