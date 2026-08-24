@extends('Layouts.AdminDashboardLayout')

@section('title', 'Admin Product Category')


@section('content')

    @push('scripts')
        @if (session()->has('msg'))
            <script>
                Toast.fire({
                    icon: `{{ session('msg')['type'] ?? 'success' }}`,
                    title: `{{ session('msg')['content'] ?? 'success' }}`
                });
            </script>
        @endif
    @endpush

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <form action="{{ route('admin.store.product', $editProduct->id ?? null) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name Field -->
            <div class="form-group row">
                <div class=" col-lg-6 mb-3">
                    <label for="productName" class="form-label fw-semibold">Product Name</label>
                    <input value="{{ $editProduct->product_name ?? '' }}" type="text" class="form-control" id="productName"
                        name="product_name" placeholder="Enter product name">
                    @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Slug Field -->
                <div class="mb-3 col-lg-6">
                    <label for="productSlug" class="form-label fw-semibold">Slug</label>
                    <input value="{{ $editProduct->product_slug ?? '' }}" type="text" class="form-control" id="productSlug"
                        name="product_slug" placeholder="product-slug">
                    @error('product_slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            {{-- <div class="form-group row">
                <div class="mb-3 col-lg-6">
                    <label for="productCategory" class="form-label fw-semibold">Category</label>
                    <select class="form-control" id="productCategory" name="category_id">
                        <option value="">Select Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Brand Field -->
                <div class="mb-3 col-lg-6">
                    <label for="productBrand" class="form-label fw-semibold">Brand</label>
                    <select class="form-control" id="productBrand" name="brand_id">
                        <option value="">Select Brand</option>
                        <option value="1">Brand 1</option>
                        <option value="2">Brand 2</option>
                    </select>
                    @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div> --}}

            <div class="form-group row">
                <!-- Price Field -->
                <div class="mb-3 col-lg-6">
                    <label for="productPrice" class="form-label fw-semibold">Price</label>
                    <input value="{{ $editProduct->product_price ?? '' }}" type="number" step="0.01" class="form-control"
                        id="productPrice" name="product_price" placeholder="Enter price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Sale Price Field -->
                <div class="mb-3 col-lg-6">
                    <label for="salePrice" class="form-label fw-semibold">Sale Price</label>
                    <input value="{{ $editProduct->sale_price ?? null }}" type="number" step="0.01" class="form-control" id="salePrice"
                        name="sale_price" placeholder="Enter sale price">
                    @error('sale_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="form-group row">
                <!-- SKU Field -->
                <div class="mb-3 col-lg-6">
                    <label for="productSku" class="form-label fw-semibold">SKU</label>
                    <input value="{{ $editProduct->sku ?? null }}" type="text" class="form-control" id="productSku" name="sku"
                        placeholder="Enter SKU code">
                    @error('sku')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Quantity Field -->
                <div class="mb-3 col-lg-6">
                    <label for="productQuantity" class="form-label fw-semibold">Quantity</label>
                    <input value="{{ $editProduct->quantity ?? null }}" type="number" class="form-control" id="productQuantity" name="quantity"
                        placeholder="Enter quantity">
                    @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <!-- Product Image Field -->
            <div class="mb-3">
                <label for="productImage" class="form-label fw-semibold">Product Image</label>
                <input type="file" class="form-control" id="productImage" name="product_image">
                @error('product_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- <!-- Gallery Images Field -->
            <div class="mb-3">
                <label for="productGallery" class="form-label fw-semibold">Gallery Images</label>
                <input type="file" class="form-control" id="productGallery" name="gallery[]" multiple>
                @error('gallery')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <!-- Short Description Field -->
            <div class="mb-3">
                <label for="shortDescription" class="form-label fw-semibold">Short Description</label>
                <textarea class="form-control" id="shortDescription" name="short_description" rows="2"
                    placeholder="Enter short description...">{{ $editProduct->short_description ?? '' }}</textarea>
                @error('short_description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Full Description Field -->
            <div class="mb-4">
                <label for="productDescription" class="form-label fw-semibold">Description</label>
                <textarea class="form-control" id="productDescription" name="description" rows="4"
                    placeholder="Enter product description...">{{ $editProduct->description ?? '' }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Display options -->
            <div class="mb-4">
                <label for="productDisplay" class="form-label fw-semibold">Display Options</label>
                <div class="form-check">
                    <input value="1" class="form-check-input" type="checkbox" id="featuredProduct" name="featured">
                    <label class="form-check-label" for="featuredProduct">
                        Featured Product
                    </label>
                    <input value="1" class="form-check-input" type="checkbox" id="trandingProduct" name="tranding">
                    <label class="form-check-label" for="trandingProduct">
                        Tranding Product
                    </label>
                </div>
            </div>

            <!-- Product Status Field -->
            <div class="mb-4">
                <label for="productStatus" class="form-label fw-semibold">Status</label>
                <select class="form-control" id="productStatus" name="status">
                    <option value="1" {{ isset($editProduct) && $editProduct->status == 1 ? 'selected' : '' }}>Active
                    </option>
                    <option value="0" {{ isset($editProduct) && $editProduct->status == 0 ? 'selected' : '' }}>
                        Inactive</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2 fw-semibold">
                  {{$editProduct ? 'Update Product' : 'Add Product'}}
                </button>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->

@endsection
