<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rebar Performance | Active Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rebar Performance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Loïc Payot</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-header">MOBILE USERS</li>
          <li class="nav-item">
            <a href="{{ route('addNewUser') }}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Add New User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('approveNewUser') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p> Pending To Approve <span class="badge badge-info right">2</span> </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activeUser') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p> Active Users </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p> Bussiness Unit <i class="right fas fa-angle-left"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addNewBussiness') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('allBussinessUnit') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Bussiness Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('approveBussinessUnit') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Requested To Add </p>
                  <span class="badge badge-info right">2</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Plant Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addNewPlantLocation') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('allPlantLocation') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Plant Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('approvePlantLocation') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Requested To Add </p>
                  <span class="badge badge-info right">2</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('showLogin') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p> Logout </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Requested Plant Location</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rebar Performance</a></li>
              <li class="breadcrumb-item active">Active Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Plant Location</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 20px">#</th>
                      <th>Plant Location Name</th>
                      <th>Status</th>
                      <th style="width: 300px">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <span class="badge bg-warning">Pending</span>
                      </td>
                      <td>
                      <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Approve
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Reject
                          </a>  
                      </td>
                    </tr>
            
                    <tr>
                      <td>2.</td>
                      <td>Update software</td>
                      <td>
                        <span class="badge bg-warning">Pending</span>
                      </td>
                      <td>
                      <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Approve
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Reject
                          </a>  
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <!--<li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2023-2024 <a href="#">rebar-performance</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
</body>
</html>