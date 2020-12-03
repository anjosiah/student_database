<!DOCTYPE html>
<html>

<head>
	<title>CREATE DATABASE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
	<link href='{{ asset('gambar/logo.png')}}' rel='shourtcut icon'>
	<style>
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		input[type="number"] {
			-moz-appearance: textfield;
		}
	</style>
</head>

<body>
	<div class="vertical-nav bg-white" id="sidebar">
		<div class="py-4 px-3 mb-4 bg-light">
			<div class="media d-flex align-items-center"><img src="{{ asset('gambar/Avatar.png')}}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
				<div class="media-body">
					<h4 class="m-0">Halo,</h4>
					<p class="font-weight-light text-muted mb-0">admin</p>
				</div>
			</div>
		</div>

		<p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu</p>

		<ul class="nav flex-column bg-white mb-0">
			<li class="nav-item">
				<a href="/index" class="nav-link text-dark font-italic bg-light">
					<i class="fa fa-home mr-3 text-primary fa-fw"></i>
					Home
				</a>
			</li>
			<li class="nav-item">
				<a href="/tambah" class="nav-link text-dark font-italic bg-light">
					<i class="fa fa-user-plus mr-3 text-primary fa-fw"></i>
					Tambah Mahasiswa
				</a>
			</li>
		</ul>
	</div>
	<div class="page-content p-5" id="content">
		<h1 class="text-center mt-3">Ubah Data Mahasiswa</h1>
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
		<div class="card mt-3">

				<div class="card-header bg-primary text-white text-center">
				Masukkan Data Mahasiswa
			</div>
			<div class="card-body">
				<form method="post" action="/edit/{{$user->nim}}">
				@csrf
					<div class="form-group">
						<label>NIM</label>
						<h5 name="nim" class="form-control" style="background-color: #e9ecef ;">{{$user->nim}}</h5>
						<input type="hidden" name="nim" class="form-control" placeholder="Masukan NIM Anda" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" value="{{$user->nim}}" required>
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Anda" value="{{$user->nama_lengkap}}" required>
					</div>
					<div class="form-group">
						<label>Kota Asal</label>
						<input type="text" name="kota" class="form-control" placeholder="Masukan Kota Asal Anda" value="{{$user->kota}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="tgl_lahir" class="form-control" placeholder="Masukan Tanggal Lahir Anda" min="1945-01-01" max="2099-01-01" value="{{$user->tgl_lahir}}" required>
					</div>
					<div class="form-group">
						<label>Nama Orang Tua</label>
						<input type="text" name="nama_ortu" class="form-control" placeholder="Masukan Nama Orang Tua Anda" value="{{$user->nama_ortu}}" required>
					</div>
					<div class="form-group">
						<label>Alamat Orang Tua</label>
						<input type="text" name="alamat_ortu" class="form-control" placeholder="Masukan Alamat Orang Tua Anda" value="{{$user->alamat_ortu}}" required>
					</div>
					<div class="form-group">
						<label>Kode Pos</label>
						<input type="number" name="kode_pos" class="form-control" placeholder="Masukan Kode Pos" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" value="{{$user->kode_pos}}" required>
					</div>
					<div class="form-group">
						<label>Nomor Telepon</label>
						<input type="number" name="no_telp" class="form-control" placeholder="Masukan Nomor Telepon" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12" value="{{$user->no_telp}}" required>
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control" name="status" required>
							<option value="{{$user->status}}">{{$user->status}}</option>
							<option value="TAMA">TAMA</option>
							<option value="WREDA">WREDA</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success" name="">Simpan</button>
					<button type="reset" class="btn btn-danger" name="">Bersihkan</button>
					<a href="/index" class="btn btn-dark">Kembali</a>
				</form>
				
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
			$('#sidebarCollapse').on('click', function() {
				$('#sidebar, #content').toggleClass('active');
			});
		});
	</script>
</body>

</html>