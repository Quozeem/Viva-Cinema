
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin | Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../Admin_Dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Admin_Dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

      <!-- DataTables -->
  <link rel="stylesheet" href="../Admin_Dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Admin_Dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<style>
.pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>


            <ul class="navbar-nav ml-auto">
             
              
            <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        </i><b>Welcome!,</b> {{Auth::guard('staff')->user()->name}} <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-user-cog"></i> Account Setting
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('userlogout')}}" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Log Out
                        </a>

                </li>
                <!-----End user with setting--->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="StaffDashboard" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{Auth::guard('staff')->user()->role}}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::guard('staff')->user()->department}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item has-treeview menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="StaffDashboard" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                       <!--- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-handshake"></i>
                                <p>
                                    Staffs
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('addstaff')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add staff</p>
                                    </a>
                                </li>
                            </ul>
                        </li-->

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            
                         <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('makeRequest')}}" class="nav-link">
                                        <i class="fas fa-door-open nav-icon"></i>
                                        <p>Make Request</p>
                                    </a>
                                    <a href="{{url('viewRequest')}}" class="nav-link">
                                        <i class="fas fa-eye nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                    <a href="{{url('trackRequest')}}" class="nav-link">
                                        <i class="fa fa-truck"></i>
                                        <p>Track Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Department
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('addDepartment')}}" class="nav-link">
                                       
                                       <i class="fas fa-plus"></i> 
                                        <p>Add Department</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Role
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="addrole" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Add Role</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
			   
				


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

 

          
</body>
</html>
