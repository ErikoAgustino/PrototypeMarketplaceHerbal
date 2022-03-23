@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Obat jual</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('obatList')}}">Obat jual</a></li>
					<li class="breadcrumb-item active">Add Obat</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
		<form method="post" action="{{route ('obatSave')}}">
			@csrf
			<div class="form-group">

				<div class="form-group">
					<label for="userId">User</label>
					<input type="text" id="userId" name="idUser" required readonly autofocus class="form-control" maxlength="100" value="{{Auth::id()}}">
				</div>


				<div class="form-group">
					<label for="namaId">Nama</label>
					<input type="text" id="namaId" name="nama" required autofocus class="form-control" maxlength="100">
				</div>

				<div class="form-group">
					<label for="deskripsiId">Deskripsi</label>
					<input type="text" id="deskripsiId" name="deskripsi" required autofocus class="form-control" maxlength="500">
				</div>

				<div class="form-group">
					<label for="hargaId">Harga</label>
					<input type="number" id="hargaId" name="harga" required autofocus class="form-control">
				</div>

				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection