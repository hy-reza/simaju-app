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
    <title>Desa Junrejo</title>
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
                        <b><img src="{{asset('assets/Adminhome/images/jambuwer.jpeg')}}" alt="homepage" class="dark-logo" /></b>
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

                        <li><a href="/admin">Dashboard </a></li>

                        <li><a href="{{ route('register') }}">Register User </a></li>

                        <li><a href="{{route ('datapenduduk.index')}}">Data Penduduk</a></li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                              <li><a href="{{route ('rw.index')}}">Data RW</a></li>
                              <li><a href="{{route ('rt.index')}}">Data RT</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Surat Keterangan Umum</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Spahliwaris.index') }}">Surat Pernyataan Ahli Waris </a></li>
                                <li><a href="{{ route('Skjualbelitanah.index') }}">Surat Keterangan Jual Beli Tanah </a></li>
                                <li><a href="{{ route('Skpenerimaanpensiun.index') }}">Surat SK Penerimaan Pensiun </a></li>
                                <li><a href="{{ route('Skmeninggaldunia.index') }}">Surat Keterangan Orang Meninggal </a></li>
                                <li><a href="{{ route('Skijinsekolah.index') }}">Surat Keterangan Ijin Sekolah </a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Surat Pernyataan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Sppindahtempat.index') }}">Surat Pernyataan Pindah Tempat Tinggal </a></li>
                                <li><a href="{{ route('Spkelahiran.index') }}">Surat Pernyataan Kelahiran </a></li>
                                <li><a href="{{ route('Spkematian.index') }}">Surat Pernyataan Kematian </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Surat Pengajuan Cerai Rujuk</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Spcerairujuk1.index') }}">Surat Pengajuan Cerai Rujuk 1 </a></li>
                                <li><a href="{{ route('Spcerairujuk2.index') }}">Surat Pengajuan Cerai Rujuk 2 </a></li>
                                <li><a href="{{ route('Spcerairujuk3.index') }}">Surat Pengajuan Cerai Rujuk 3 </a></li>
                                <li><a href="{{ route('Spcerairujuk4.index') }}">Surat Pengajuan Cerai Rujuk 4 </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Surat Ket. Tidak Mampu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Sktidakmampu1.index') }}">Surat Ket. Tidak Mampu 1 </a></li>
                                <li><a href="{{ route('Sktidakmampu2.index') }}">Surat Ket. Tidak Mampu 2 </a></li>
                                <li><a href="{{ route('Sktidakmampu3.index') }}">Surat Ket. Tidak Mampu 3 </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route ('rw.index')}}">Data RW</a></li>
                                <li><a href="{{route ('rt.index')}}">Data RT</a></li>
                                <li><a href="{{route ('datapenduduk.index')}}">Data Penduduk</a></li>
                                <li><a href="{{route ('Spkematian.index')}}">Data Pernyataan Kematian</a></li>
                                <li><a href="{{route ('v1.index')}}">Data Mahasiswa</a></li>
                                <li><a href="{{route ('matkul.index')}}">Data Mata Kuliah</a></li>
                                <li><a href="{{route ('jurusan.index')}}">Data Jadwal Jurusan</a></li>
                                <li><a href="{{route ('kelas.index')}}">Data Kelas Mahasiswa</a></li>
                                <li><a href="{{route ('Spcerairujuk1.index')}}">Data Pengajuan cerai rujuk 1</a></li>
                                <li><a href="{{route ('Spcerairujuk2.index')}}">Data Pengajuan cerai rujuk 2</a></li>
                                <li><a href="{{route ('Spcerairujuk3.index')}}">Data Pengajuan cerai rujuk 3</a></li>
                                <li><a href="{{route ('Spcerairujuk4.index')}}">Data Pengajuan cerai rujuk 4</a></li>
                                <li><a href="{{ route('Sktidakmampu1.index') }}">Data Ket. Tidak Mampu 1 </a></li>
                                <li><a href="{{ route('Sktidakmampu2.index') }}">Data Ket. Tidak Mampu 2 </a></li>
                                <li><a href="{{ route('Sktidakmampu3.index') }}">Data Ket. Tidak Mampu 3 </a></li>
                                <li><a href="{{ route('Spkelahiran.index') }}">Data Pernyataan Kelahiran </a></li>
                                <li><a href="{{ route('Sppindahtempat.index') }}">Data Pernyataan Permohonan Pindah Tempat </a></li>
                                <li><a href="{{ route('Skijinsekolah.index') }}">Data Keterangan Ijin Sekolah </a></li>
                                <li><a href="{{ route('Skpenerimaanpensiun.index') }}">Data Keterangan Penerimaan Pensiun </a></li>
                                <li><a href="{{ route('Skjualbelitanah.index') }}">Data Keterangan Jual Beli Tanah </a></li>
                                <li><a href="{{ route('Skmeninggaldunia.index') }}">Data Keterangan Meninggal Dunia </a></li>
                            </ul>
                        </li>
                   </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pernyataan Kelahiran</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                        <li class="breadcrumb-item active">Data Pernyataan Kelahiran</li>
                    </ol>
                </div>
            </div>
            <!-- <div class="col" align="center">
                <p>
                  <h1 class="text"><br><br><br><br><br>Anda login sebagai Administrator</h1>
                </p>
            </div> -->
            @if(count($result))
            <div class="container">
              <div class="alert alert-success">Data Yang Anda Cari {{$search}}</div>
            </div>

            <div class="container">
              <form action="{{ route('Spkelahiran.search')}}" method="get">
                <input type="text" name="Spkelahiran" class="form-control" placeholder="Search..." style="width: 80%; display: inline;">
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>

            <div class="row m-t-25">
                <div class="col-sm-5 col-lg-3">
                    <table style="width: 100px" id="datatable" class="table table-striped table-bordered">
                            <tr>
                                <td>
                                    <a href="{{route ('Spkelahiran.create')}}" class="btn btn-primary btn-sm">Tambah Data Pernyataan Kelahiran</a>
                                </td>
                            </tr>
                    </table>
                    </div>
                </div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>NIK</th>
                      <th>NO.KK</th>
                      <th>JENIS KELAMIN</th>
                      <th>PEKERJAAN</th>
                      <th>ALAMAT</th>
                      <th>NAMA ANAK </th>
                      <th>TTL</th>
                      <th>Kelahiran ke</th>
                      <th>TTL ALM</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Pekerjaan Ortu</th>
                      <th>Alamat Ortu</th>
                      <th>Tgl Hari ini</th>
                      <th>Nama Kades</th>
                      <th>Nama Pernyataan</th>
                      <th>AKSI</th>
										</tr>
									</thead>
									<tbody>
										@foreach($result as $Spkelahiran)
										<tr>
											<td>{{$Spkelahiran['id']}}</td>
											<td>{{$Spkelahiran['nama']}}</td>
											<td>{{$Spkelahiran['nik']}}</td>
                      <td>{{$Spkelahiran['nomor_kk']}}</td>
                      <td>{{$Spkelahiran['jenis_kelamin']}}</td>
                      <td>{{$Spkelahiran['pekerjaan']}}</td>
                      <td>{{$Spkelahiran['alamat']}}</td>
                      <td>{{$Spkelahiran['nama_anak']}}</td>
                      <td>{{$Spkelahiran['ttl']}}</td>
                      <td>{{$Spkelahiran['kelahiran_ke']}}</td>
                      <td>{{$Spkelahiran['nama_ayah']}}</td>
                      <td>{{$Spkelahiran['nama_ibu']}}</td>
                      <td>{{$Spkelahiran['pekerjaan_ortu']}}</td>
                      <td>{{$Spkelahiran['alamat_ortu']}}</td>
                      <td>{{$Spkelahiran['tgl_hari_ini']}}</td>
                      <td>{{$Spkelahiran['nama_kades']}}</td>
                      <td>{{$Spkelahiran['nama_pernyataan']}}</td>
											<td><a href="{{action('SpkelahiranController@edit', $Spkelahiran['id'])}}" class="btn btn-warning">Ubah</a><br><br>
                        <a href="{{action('SpkelahiranController@show', $Spkelahiran['nik'])}}" class="btn btn-warning">Surat</a><br><br>
												<form action="{{action('SpkelahiranController@destroy', $Spkelahiran['id'])}}" method="post">
													@csrf
													<input type="hidden" name="_method" value="DELETE">
													<button class="btn btn-danger" type="submit">Hapus</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
                  @else
                  <h1>Data Tidak Ditemukan</h1>
                  @endif
								</table>
							</div>

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
