@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>Product Page</h1>

    <a href="{{ route('product.create') }}" class="btn btn-primary">
        Add Product
    </a>
</div>

@endsection