@extends('master')
@section('title', 'Admin All Contacts')

@section( 'content' )

    <div class="container pt-5">
        <h1 class="text-center">Admin Contacts List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
            {{--            <a href="{{ route('/admin/all-product') }}" class="btn btn-dark">Add</a>--}}
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
                @foreach($contacts as $key=>$contact)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
{{--                    <td>--}}

{{--                        @if( $product->image)--}}
{{--                            --}}{{--                            <img src="{{ $product->image }}" style="height: 50px;width:100px;" alt="slika">--}}

{{--                            <img src="/storage/images/{{$product->image}}" style="height:50px; width:100px;" alt="slika">--}}

{{--                            --}}{{--                            {{ asset('storage/app/public/images'. $product->image) }}--}}
{{--                        @else--}}
{{--                            <span>No image found!</span>--}}
{{--                        @endif--}}
{{--                    </td>--}}
                    <td>
                        <a href="/admin/delete-contact/{{ $contact->id }}" class="btn btn-danger">Delete</a>
                        <a class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
