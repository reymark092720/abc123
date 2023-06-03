@extends('layouts.app')

@section('title', 'All Categories')

@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <h4 class="mb-4 text-center">Our Categories</h4>
        <div class="row justify-content-center">
            @forelse ($categories as $item)
            <div class="col-6 col-md-3 mb-4">
                <div class="category-card">
                    <a href="{{ url('/collections/'.$item->slug) }}">
                        <div class="category-card-img">
                            <img src="{{ asset("$item->image") }}" class="w-100 object-fit-fill rounded-circle" alt="Laptop" />
                        </div>
                        <div class="category-card-body text-center">
                            <h5>{{ $item->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <h5 class="text-center">No Categories Available</h5>
            </div>
            @endforelse
        </div>
    </div>
</div>

<style>
    .category-card {
        border: 2px solid #f2f2f2;
        border-radius: 10px;
        padding: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .category-card-img img {
        border-radius: 50%;
    }

    .category-card-body {
        padding-top: 15px;
    }
</style>

@endsection