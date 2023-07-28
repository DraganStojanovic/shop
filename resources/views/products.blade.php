@extends('master')
@section('title', 'Products')

@section( 'content' )

    <div class="container">
        <h1>Admin Products List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
{{--            <a href="{{ route('/admin/all-product') }}" class="btn btn-dark">Add</a>--}}
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th width="30%">Image</th>
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
{{--                            <img src="{{ $product->image }}" style="height: 50px;width:100px;" alt="slika">--}}

                                <img src="/storage/images/{{$product->image}}" style="height:50px; width:100px;" alt="slika">

{{--                            {{ asset('storage/app/public/images'. $product->image) }}--}}
                        @else
                            <span>No image found!</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
