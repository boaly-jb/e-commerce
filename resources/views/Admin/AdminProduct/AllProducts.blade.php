@extends('Layouts.AdminDashboardLayout')

@section('title', 'Admin Product Category')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h1 class="h3 mb-1 text-gray-800 fw-bold">All Products</h1>
            <p class="text-muted small mb-0">Manage and organize your store's product inventory.</p>
        </div>
        <div>
            <a href="{{ route('admin.form.product') }}" class="btn btn-primary fw-semibold px-3 py-2">
                <i class="bi bi-plus-lg me-1"></i> Add New Product
            </a>
        </div>
    </div>

 

    <!-- Quick Summary Metrics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small text-uppercase fw-semibold d-block">Total Products</span>
                        <h3 class="mb-0 fw-bold mt-1 text-dark">124</h3>
                    </div>
                    <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small text-uppercase fw-semibold d-block">Active Items</span>
                        <h3 class="mb-0 fw-bold mt-1 text-success">108</h3>
                    </div>
                    <div class="bg-success bg-opacity-10 text-success rounded-3 p-3">
                        <i class="bi bi-check-circle fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small text-uppercase fw-semibold d-block">Low Stock</span>
                        <h3 class="mb-0 fw-bold mt-1 text-warning">12</h3>
                    </div>
                    <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3">
                        <i class="bi bi-exclamation-triangle fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small text-uppercase fw-semibold d-block">Out of Stock</span>
                        <h3 class="mb-0 fw-bold mt-1 text-danger">4</h3>
                    </div>
                    <div class="bg-danger bg-opacity-10 text-danger rounded-3 p-3">
                        <i class="bi bi-x-circle fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body py-3">
            <form action="" method="GET" class="row g-2 align-items-center">
                <!-- Search Input -->
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white text-muted border-end-0">
                            Search
                        </span>
                        <input type="text" 
                               name="search" 
                               class="form-control border-start-0 ps-0" 
                               placeholder="Search product name, SKU..." 
                               value="{{ request('search') }}">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-md-3">
                    <select name="category" class="form-select">
                        <option value="">All Categories</option>
                        <option value="1" {{ request('category') == '1' ? 'selected' : '' }}>Category 1</option>
                        <option value="2" {{ request('category') == '2' ? 'selected' : '' }}>Category 2</option>
                    </select>
                </div>

                <!-- Status Filter -->
                <div class="col-md-3">
                    <select name="status" class="form-select">
                        <option value="">All Statuses</option>
                        <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Filter Action Buttons -->
                <div class="col-md-2 d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-100 fw-semibold">
                        Filter
                    </button>
                    <a href="{{ url()->current() }}" class="btn btn-outline-secondary w-100">
                        Reset
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Product Listing Table Card -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0 fw-bold text-primary">Product List</h5>
            <span class="badge bg-light text-dark border">Showing Products</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                   <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="ps-3">Product</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Regular Price</th>
                    {{-- <th scope="col">sell Price</th> --}}
                    <th scope="col">Stock</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end pe-4">Actions</th>
                </tr>
            </thead>
                      <tbody>
                <!-- Row 1: In Stock & On Sale -->
                @forelse($products as $product)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded border bg-light p-1 me-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="img-fluid" style="max-width: 100%; max-height: 100%;">
                            </div>
                            <div>
                                <a href="#" class="fw-semibold text-dark text-decoration-none d-block">
                                    {{ $product->product_name }}
                                </a>
                                <span class="text-muted small">
                                    Category: Electronics
                                </span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-light text-secondary border">
                           {{ $product->sku }}
                        </span>
                    </td>
                    <td>
                        <div>
                            <span class="fw-bold text-success">$ {{ $product->product_price }}</span> <br>
                            <span class="text-muted text-decoration-line-through small ms-1">$ {{ $product->sale_price }}</span>
                        </div>
                    </td>
                    
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 py-1">
                            In Stock ({{ $product->quantity }})
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-success rounded-pill text-white p-2">Active</span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('admin.form.product', $product->id) }}" class="btn btn-outline-primary" title="Edit Product">Edit</a>
                            <button type="button" class="btn btn-outline-danger" title="Delete Product">Delete</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <td colspan="6" class="text-center text-muted py-4">
                        No products found.
                    </td>
                @endforelse

               
            </tbody>
        </table>
                </table>
            </div>
        </div>

       
    </div>

</div>
<!-- /.container-fluid -->


 @endsection