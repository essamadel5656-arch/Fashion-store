@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Add Product</h2>
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name"> <!-- ضفنا الـ " وقفلنا الـ > -->
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description"></textarea> <!-- قفلنا الـ textarea -->
                </div>

                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" step="0.01" min="0">
                </div>
                <div class="form-group mb-3">
                    <label for="color" class="form-label">Color</label>
                    <select class="form-control" name="color" id="color">
                        <option value="">Select a color</option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <button type="submit" class="btn btn-primary" href="" >Add Product</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
