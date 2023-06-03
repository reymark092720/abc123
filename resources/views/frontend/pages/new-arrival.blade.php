@extends('layouts.app')

@section('title', 'New Arrival Products')

@section('content')

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>New Arrival Products</h4>
                    <hr />
                </div>

                
                    @forelse ($newArrivalsProducts as $productItem)
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">

                                <label class="stock bg-danger">New</label>
                                @if ($productItem->productImages->count() > 0)
                                    <a
                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                            alt="{{ $productItem->name }}" class="object-fit-contain border rounded"
                                            style="height: 200px">
                                    </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a
                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">{{ $productItem->selling_price }}</span>
                                    <span class="original-price">{{ $productItem->original_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-md-12 p-2">
                            <h5>No Products Available</h5>
                        </div>
                    @endforelse

                    <div class="text-center">
                        <a href="{{ url('collections') }}" class="btn btn-warning px-3">View More</a>
                    </div>
                
            </div>
        </div>
    </div>

@endsection
