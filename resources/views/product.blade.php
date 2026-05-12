@extends('layout')

@section('content')

<div class="container py-4">
    <div class="row product-list">
        <a href="/store" class="btn btn-primary">Add product</a>
        @foreach ($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card product-card h-100">
                    <div class="product-image text-center p-3">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid" style="max-height: 200px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-color">{{ $item->color }} @if($item->color == 'green') <span style="display: inline-block; width: 10px; height: 10px; background-color: green; border-radius: 50%; margin-left: 5px;"></span> @elseif($item->color == 'red') <span style="display: inline-block; width: 10px; height: 10px; background-color: red; border-radius: 50%; margin-left: 5px;"></span> @elseif($item->color == 'blue') <span style="display: inline-block; width: 10px; height: 10px; background-color: blue; border-radius: 50%; margin-left: 5px;"></span> @endif</p>
                        <p class="price-label">Price: {{ number_format($item->price, 2) }}.EGP</p>
                        <a href="delete_product/{{ $item->id }}" class="btn btn-danger">Delete</a>
                        <a href="edit_product/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
