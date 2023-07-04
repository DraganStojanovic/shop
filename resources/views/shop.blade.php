@extends('master')
@section('title', 'Shop')

    @section( 'content' )

        <div class="card p-2" style="width: 28rem;">
            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
            <div class="card-body">
                @foreach($products as $product)

                    <h1 class="card-title">Product: {{ $product->name }}</h1><br>
                    <h3 class="card-text">Model: {{ $product->description }}</h3><br>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Amount: {{ $product->amount }}</li>
                <li class="list-group-item">Price: {{ $product->price }}</li>

            </ul>
            <div class="card-body">
                <a href="#" class="card-link">More</a>
                <a href="#" class="card-link">Compare</a>
            </div>
        </div>
        @endforeach
    @stop
