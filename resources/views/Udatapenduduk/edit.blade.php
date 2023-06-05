<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>Perubahan</h2><br />
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br />
		@endif
		<form method="post" action="{{action('UdatapendudukController@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nik :</label>
					<input type="text" class="form-control" name="nik" value="{{$Udatapenduduk->nik}}">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Udatapenduduk->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Jenis kelamin :</label>
        <input type="text" class="form-control" name="jenis_kelamin" value="{{$Udatapenduduk->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Tempat TTL :</label>
      <input type="text" class="form-control" name="tempat_ttl" value="{{$Udatapenduduk->tempat_ttl}}" onkeyup="this.value = this.value.toUpperCase();">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">TGL_Lahir :</label>
    <input type="date" class="form-control" name="tgl_lahir" value="{{$Udatapenduduk->tgl_lahir}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Agama :</label>
    <input type="text" class="form-control" name="agama" value="{{$Udatapenduduk->agama}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Status :</label>
    <input type="text" class="form-control" name="status" value="{{$Udatapenduduk->status}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pendidikan Terakhir :</label>
    <input type="text" class="form-control" name="pendidikan_terakhir" value="{{$Udatapenduduk->pendidikan_terakhir}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Udatapenduduk->pekerjaan}}">
  </div>
</div>
</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left: 38px">Edit</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>
