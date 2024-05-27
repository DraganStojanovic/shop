@extends('master')
@section('title', 'Products')

@section('content')
    <div class="container pt-5">
        <h1>Admin Products List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
            <div class="col-md-6 offset-md-3 d-grid">
                <a href="/admin/add-product" class="btn btn-info">Add New Product</a>
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
                        <a href="{{ route('obrisiProizvod', ['product' => $product->id]) }}" class="btn btn-danger">Delete</a>
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
                    <h5 class="modal-title" id="deleteModalLabel">Potvrdi brisanje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Da li ste sigurni da želite da obrišete ovaj proizvod?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Otkaži</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Obriši</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            let confirmDeleteBtn = document.getElementById('confirmDelete');
            let deleteFormAction;

            document.querySelectorAll('.btn-danger').forEach(btn => {
                btn.addEventListener('click', function (event) {
                    event.preventDefault();
                    deleteFormAction = this.getAttribute('href');
                    deleteModal.show();
                });
            });

            confirmDeleteBtn.addEventListener('click', function () {
                window.location.href = deleteFormAction;
            });
        });
    </script>
@stop
