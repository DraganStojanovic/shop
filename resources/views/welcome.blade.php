@extends('master')
{{--@section('title', 'Home page')--}}

    @section( 'content' )
        <div class="container pt-3">
                <div class="row">
                    <h1>Home page</h1>
                </div>
                <div class="row">
                    <div class="bg-light p-5 rounded-lg m-3">
                        <h3 class="display-4">Trenutno vreme je:</h3>
                        <h5 class="display-2">{{ date("h:i:s") }}</h5>
                    </div>
                </div>
            </div>
    @stop

