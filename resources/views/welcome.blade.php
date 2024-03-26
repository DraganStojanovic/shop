@extends('master')
@section('title', 'Dashboard page')

    @section( 'content' )
        <div class="container pt-3">
                <div class="row">
                    <h1>Dashboard page</h1>
                </div>
                <div class="row">
                    <div class="bg-light p-5 rounded-lg m-3">
                        <h3 class="display-4">Trenutno vreme je:</h3>
                        <h5 class="display-2">{{ gmdate("H:i:s", time() - 3600) }}</h5>
                    </div>
                </div>
            </div>
        <div class="card pb-5">
            <h1 class="text-center pt-3 pb-3">Products</h1>
            <div class="card-body">
                <div class="row">
                    @foreach( $newProducts as $newProduct)
                        <div class="col-sm-4">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <img src="{{ asset('./storage/images/'.$newProduct->image) }}" class="card-img-top" alt="Slike">
                                    <h1 class="card-title">Product: {{ $newProduct->name }}</h1>
                                    <h3 class="card-text">Model: {{ $newProduct->description }}</h3>
                                    <h4 class="card-text">Amount: {{ $newProduct->amount }}</h4>
                                    <h5 class="card-text">Price: {{ $newProduct->price }}</h5>
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

