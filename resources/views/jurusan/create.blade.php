<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/Adminhome/images/tiitle.png')}}">
    <title>Admin KRS</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/Adminhome/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{asset('assets/Adminhome/css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/Adminhome/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/Adminhome/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/Adminhome/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/Adminhome/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/Adminhome/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin">
                        <!-- Logo icon -->
                        <b><img src="{{asset('assets/Adminhome/images/KRS.png')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">

                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">


                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/Adminhome/images/users/5.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('register') }}">Register Mahasiswa </a></li>
                                <li><a href="{{ route('v1.create') }}">Tambah Data Mahasiswa </a></li>
                                <li><a href="{{ route('matkul.create') }}">Tambah Data Mata Kuliah </a></li>
                                <li><a href="{{ route('kelas.create') }}">Tambah Data Kelas Mahasiswa </a></li>
                                <li><a href="{{ route('jurusan.create') }}">Tambah Data Jurusan </a></li>
                            </ul>
                        </li>
												<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route ('v1.index')}}">Data Mahasiswa</a></li>
                                <li><a href="{{route ('matkul.index')}}">Data Mata Kuliah</a></li>
                                <li><a href="{{route ('jurusan.index')}}">Data Jadwal Jurusan</a></li>
                                <li><a href="{{route ('kelas.index')}}">Data Kelas Mahasiswa</a></li>
                            </ul>
                        </li>
                   </ul>
                </nav>
            </div>
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">JURUSAN</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                        <li class="breadcrumb-item active">Jurusan</li>
                    </ol>
                </div>
            </div>
            <!-- <div class="col" align="center">
                <p>
                  <h1 class="text"><br><br><br><br><br>Anda login sebagai Administrator</h1>
                </p>
            </div> -->
						<body>
							<div class="container">
								<h2>Input Data Jadwal Jurusan</h2>
								@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div><br />
								@endif
								@if (\Session::has('success'))
								<div class="alert alert-success">
									<p>{{ \Session::get('success') }}</p>
								</div><br />
								@endif
								<form method="post" action="{{url('jurusan')}}">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="kode" placeholder="Kode">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="nama" placeholder="Nama">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="jadwal" placeholder="HH:MM - HH:MM">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<button type="submit" class="btn btn-success" style="margin-left: 38px">Tambah</button>
								</div>
							</div>
						</form>

            <!-- End Bread crumb -->
    <!-- All Jquery -->
    <script src="{{asset('assets/Adminhome/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/Adminhome/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/Adminhome/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/Adminhome/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/Adminhome/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <!-- Amchart -->
    <script src="{{asset('assets/Adminhome/js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/morris-chart/dashboard1-init.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/Adminhome/js/lib/calendar-2/semantic.ui.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/Adminhome/js/lib/calendar-2/prism.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/Adminhome/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/Adminhome/js/lib/calendar-2/pignose.init.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{asset('assets/Adminhome/js/scripts.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/Adminhome/js/scripts.js')}}"></script>

</body>

</html>
