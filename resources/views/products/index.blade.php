@extends('layouts.app')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
        <div class="product-column">
            <div class="product-bodyy">
                <img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
                <div class="product-textt">
                    <h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
                    @unless(empty($product->description))
                    <p>{{ $product->description }}</p>
                    @if ($product->discount > 0)
                    <div class="korting">
                        <p>nu <span>{{ $product->discount }}%</span> kortning</p>
                    </div>
                    @endif
                    @endunless


                </div>
            </div>
            <button class="btn btn-primary">Meer info &amp; bestellen</button>
        </div>
    </a>
		@endforeach
	</div>

@endsection