@extends('layouts.app')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card shadow-lg border-0 rounded-4" style="width: 500px;">

        <div class="card-header bg-primary text-white text-center rounded-top-4">
            <h2 class="fw-bold mb-0">Create Product</h2>
            <p class="mb-0">Add new product data</p>
        </div>

        <div class="card-body p-4">

            <form>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Product Name
                    </label>

                    <input type="text"
                           class="form-control rounded-3"
                           placeholder="Enter product name">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Product Price
                    </label>

                    <input type="number"
                           class="form-control rounded-3"
                           placeholder="Enter product price">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Product Description
                    </label>

                    <textarea class="form-control rounded-3"
                              rows="4"
                              placeholder="Enter product description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Product Image
                    </label>

                    <input type="file"
                           class="form-control rounded-3">
                </div>

                <div class="d-grid">
                    <button type="submit"
                            class="btn btn-primary btn-lg rounded-3">
                        Save Product
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection