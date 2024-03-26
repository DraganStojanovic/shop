@extends('master')
@section('title', 'Shop')

    @section( 'content' )

<div class="card">
    <h1 class="text-center pt-5 pb-5">Products</h1>
    <div class="card-body">
        <div class="row mb-3">
            @foreach( $products as $product)
            <div class="col-sm-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/'.$product->image) }}" class="card-img-top" alt="Slike">
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
{{--                <div class="d-flex">--}}
{{--                    {!! $product->links() !!}--}}
{{--                </div>--}}
            </div>
            @endforeach
        </div>

    </div>
</div>
    @stop
