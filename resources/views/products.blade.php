@extends('master')
@section('title', 'Products')

@section( 'content' )

    <div class="container pt-5">
        <h1>Admin Products List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th width="30%">Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $products as $key=>$product)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if( $product->image)
                            <img src="/storage/images/{{ $product->image }}" style="height:50px; width:100px;"
                                 alt="slika">
                        @else
                            <span>No image found!</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('obrisiProizvod', ['product' => $product->id]) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('product.single', ['id' => $product->id ]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
