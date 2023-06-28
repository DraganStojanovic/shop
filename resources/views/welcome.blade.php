@extends('master')

    @section( 'content' )
        <div class="container pt-3">
                <div class="row">
                    <h1>Home page</h1>
                </div>
                <div class="row">
                    <div class="jumbotron">
                        <h3>Trenutno vreme je:</h3>
                        <h4>{{ date("h:i:s") }}</h4>
                    </div>
                </div>
            </div>
    @stop

