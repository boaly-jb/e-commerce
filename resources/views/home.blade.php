@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
     
    </div>

   
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                    <h5>Product Category</h5>
                </div>
                <div class="card-body">
                   
                        <div class="row">
                            <div class="col-lg-8">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-dark text-center" >
                                        <tr>
                                            <th>S/L</th>
                                            <th>Category Name</th>
                                            <th>image</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mobile</td>
                                            <td><img src="path/to/image.jpg" alt="Image" width="100" class="rounded-circle"></td>
                                            <td class="text-center">
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>    
                            </div>
                            <div class="col-lg-4">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card p-2">
                                        <div class="form-group mb-3">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

