
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin | Dashboard</title>
    <meta name="csrf-token" content="{{csrf_token()}}"/> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../Admin_Dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Admin_Dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}"/> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
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


           
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
           

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                       

                        <li class="nav-item has-treeview">
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Add Cinema location
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                           
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="addMovies" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Add Movies
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            
                       
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="addTime" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Allocate Time for movies
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                           
                        </li>
                       
			  
				


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


          
</body>
</html>
