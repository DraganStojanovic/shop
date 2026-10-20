@extends('master')
@section('title', $product->name)

@section('content')

    <div class="card">
        <div class="card-body">
            <a href="{{ url('/shop') }}" class="btn text-white mb-4" style="background-color: #ff9f43;">← Back to shop</a>

            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('storage/images/'.$product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                </div>

                <div class="col-md-7">
                    <h1>{{ $product->name }}</h1>
                    <h3 class="text-muted">{{ $product->price }}</h3>
                    <h5 class="card-text">
                        Amount: <span class="badge bg-success rounded-0 text-white">{{ $product->amount }}</span>
                    </h5>
                    <hr>
                    <h5>Description</h5>
                    <div>{!! nl2br(e($product->description)) !!}</div>

                    <button class="btn btn-primary mt-4">Add to cart</button>
                </div>
            </div>
        </div>
    </div>

@stop