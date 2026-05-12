@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Edit Product</h2>
            <form action="/update_product/{{ $item['id'] }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}"> 
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description">{{ $item->description }}</textarea> 
                </div>

                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" value="{{ $item->price }}" name="price" id="price" step="0.01" min="0">
                </div>
                <div class="form-group mb-3">
                    <label for="color" class="form-label">Color</label>
                    <select class="form-control" name="color" id="color">
                        <option value="">Select a color</option>
                        <option value="red" {{ $item->color == 'red' ? 'selected' : '' }}>Red</option>
                        <option value="green" {{ $item->color == 'green' ? 'selected' : '' }}>Green</option>
                        <option value="blue" {{ $item->color == 'blue' ? 'selected' : '' }}>Blue</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid" style="max-height: 100px;">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
                
            </form>
        </div>
    </div>
</div>

@endsection
