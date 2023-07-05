@extends('master')
@section('title', 'Shop')

    @section( 'content' )

<div class="card">
    <h1 class="text-center pt-3 pb-3">Products</h1>
    <div class="card-body">
        <div class="row">
            @foreach($products as $product)
            <div class="col-sm-4">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h1 class="card-title">Product: {{ $product->name }}</h1>
                        <h3 class="card-text">Model: {{ $product->description }}</h3>
                        <h4 class="card-text">Amount: {{ $product->amount }}</h4>
                        <h5 class="card-text">Price: {{ $product->price }}</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link text-white">More</a>
                        <a href="#" class="card-link text-white">Compare</a>
                    </div>
                </div><br>
            </div>
            @endforeach
        </div>

    </div>
</div>
    @stop
