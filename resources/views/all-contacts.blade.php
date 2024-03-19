@extends('master')
@section('title', 'Admin All Contacts')

@section( 'content' )

    <div class="container pt-5">
        <h1 class="text-center">Admin Contacts List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $contacts as $key=>$contact)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a href="{{ route('obrisiContact', ['contact'=> $contact->id]) }}" class="btn btn-danger mb-1">Delete</a>
                        <a href="{{ route('contact.single', ['id'=> $contact->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
