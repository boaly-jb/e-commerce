@extends('Layouts.AdminDashboardLayout')

@section('title', 'Admin Product Category')


@section('content')



    <!-- Begin Page Content -->
    <div class="container-fluid">

      <div class="row"> 
        <div class="col-lg-8">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Parent Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>    
                    </tr>
                </thead>
                <tbody>
               
                </tbody>

            </table>
        </div>
        <div class="col-lg-3 bg-white p-4 shadow-sm rounded">
            <form action="" method="POST">
                @csrf
                <!-- Category Name Field -->
                <div class="mb-3">
                    <label for="categoryName" class="form-label fw-semibold">Category Name</label>
                    <input type="text" class="form-control" id="categoryName" name="name" placeholder="Enter category name" required>
                </div>

                <!-- Slug Field -->
                <div class="mb-3">
                    <label for="categorySlug" class="form-label fw-semibold">Slug</label>
                    <input type="text" class="form-control" id="categorySlug" name="slug" placeholder="category-slug">
                </div>


                <!-- image  -->
                <div class="mb-3">
                    <label for="categoryImage" class="form-label fw-semibold">Image</label>
                    <input type="file" class="form-control" id="categoryImage" name="image">
                </div>

               

                <!-- Description Field -->
                <div class="mb-4">
                    <label for="categoryDescription" class="form-label fw-semibold">Description</label>
                    <textarea class="form-control" id="categoryDescription" name="description" rows="3" placeholder="Enter category description..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary py-2 fw-semibold">
                        <i class="fa-solid fa-plus me-1"></i> Save Category
                    </button>
                </div>
            </form>
        </div>

      </div>

    </div>
        <!-- /.container-fluid -->

 @endsection