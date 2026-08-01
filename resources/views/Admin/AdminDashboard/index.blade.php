@extends('Layouts.AdminDashboardLayout')

@section('title', 'Admin Dashboard')


@section('content')



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h6>User </h6>
        <div class="row mb-4">

            <div class=" col-sm-3 mb4">
                <div class="card stat-card bg-soft-green p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-success mb-2"></i>
                       <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">1,234</h3>
                    <p class="text-muted small mb-0">Total Users</p>
                </div>
            </div>

            <div class=" col-sm-3 mb4">
                <div class="card stat-card bg-soft-orange p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-warning mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">$ 390.66</h3>
                    <p class="text-muted small mb-0">Commission Given</p>
                </div>
            </div>

            <div class=" col-sm-3 mb4">
                <div class="card stat-card bg-soft-orange p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-danger mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">2600</h3>
                    <p class="text-muted small mb-0">Total Item</p>
                </div>
            </div>

             <div class=" col-sm-3">
                <div class="card stat-card bg-soft-green p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-success mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">18.6K</h3>
                    <p class="text-muted small mb-0">In Stock</p>
                </div>
            </div>  
            
        </div>


        <h6 class="mt-5">Products  </h6>
        <div class="row">
            <div class="col-sm-3 mb-4">
                <div class="card stat-card bg-soft-green p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-success mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">18.6K</h3>
                    <p class="text-muted small mb-0">Product Items</p>
                </div>
            </div>

            <div class=" col-sm-3 mb4">
                <div class="card stat-card bg-soft-pink p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-danger mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">190</h3>
                    <p class="text-muted small mb-0">Out Of Stock</p>
                </div>
            </div>

            <div class=" col-sm-3 mb4">
                <div class="card stat-card bg-soft-orange p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-warning mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">15</h3>
                    <p class="text-muted small mb-0">Waiting For Confirmation</p>
                </div>
            </div>

           


            <div class="col-sm-3 mb-4">
                <div class="card stat-card bg-soft-blue p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-primary mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">70</h3>
                    <p class="text-muted small mb-0">Processing Order</p>
                </div>
            </div>
            <div class="col-sm-3 mb-4">
                <div class="card stat-card bg-soft-green p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-success mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">42</h3>
                    <p class="text-muted small mb-0">Ready For Delivery</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card stat-card bg-soft-orange p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <i class="fas fa-fw fa-chart-area fa-2x text-warning mb-2"></i>
                        <span class="text-success fw-bold small"><i class="fa-solid fa-arrow-up"></i> 18%</span>
                    </div>
                    <h3 class="fw-bold mb-1">$ 580.00</h3>
                    <p class="text-muted small mb-0">Refunded</p>
                </div>
            </div>
             
        </div>

        </div>
        <!-- /.container-fluid -->

 @endsection
