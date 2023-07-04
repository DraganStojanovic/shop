@extends('master')
@section('title', 'Shop')

    @section( 'content' )
        <div class="container pt-3">
            <div class="row">
                @foreach($products as $product)

                    <h1>Product: {{ $product->name }}</h1><br>
                    <h3>Model: {{ $product->description }}</h3><br>
                    <h4>Amount: {{ $product->amount }}</h4><br>
                    <h5>Price: {{ $product->price }}</h5>

                @endforeach

            </div>
        </div>
    @stop
