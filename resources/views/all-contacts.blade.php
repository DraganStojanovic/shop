@extends('master')
@section('title', 'Admin All Contact')
@section( 'content' )
    <div class="container pt-3">
        <div class="row">
            <h1>Admin All Contact</h1><br/>
            <hr>
            @foreach($contacts as $contact)
                <h4>Sender mail: {{ $contact->email }}</h4>
                <h4>Subject: {{ $contact->subject }}</h4>
                <p>Message: {{ $contact->message }}</p><br>
                <hr>
            @endforeach
        </div>
    </div>
@stop
