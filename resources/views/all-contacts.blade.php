@extends('master')
@section('title', 'Admin All Contacts')

@section('content')
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
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-bs-target="#confirmDeleteModal{{ $contact->id }}">Delete</button>
                    </td>
                    <td>
                        <a href="{{ route('contact.single', ['id' => $contact->id]) }}" class="btn btn-primary">Edit</a>
                    </td>

                </tr>
                <!-- Modal -->
                <div class="modal fade" id="confirmDeleteModal{{ $contact->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Potvrdi brisanje</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Da li ste sigurni da želite da obrišete ovaj kontakt?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Otkaži</button>
                                <a href="{{ route('obrisiContact', ['contact' => $contact->id]) }}" class="btn btn-danger">Obriši</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
