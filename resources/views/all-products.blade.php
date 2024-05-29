@extends('master')
@section('title', 'Products')

@section('content')
    <div class="container pt-5">
        <h1>Admin Products List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
            <div class="col-md-6 offset-md-3 d-grid">
                <a href="{{ route('product.addProduct') }}" class="btn btn-info">Add New Product</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th width="30%">Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/images/' . $product->image) }}" style="height:50px; width:100px;" alt="slika">
                        @else
                            <span>No image found!</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-danger delete-button" data-id="{{ $product->id }}" data-toggle="modal" data-target="#deleteModal">Delete</button>
                    </td>
                    <td>
                        <a href="{{ route('product.single', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            let deleteForm = document.getElementById('deleteForm');

            document.querySelectorAll('.delete-button').forEach(btn => {
                btn.addEventListener('click', function () {
                    let productId = this.getAttribute('data-id');
                    deleteForm.setAttribute('action', '/admin/product/delete/' + productId);
                    deleteModal.show();
                });
            });
        });
    </script>
@stop
