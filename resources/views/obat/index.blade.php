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
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Obat</li>
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
		<div class="card-header">
			<a href="{{route('obatForm')}}" class="btn btn-primary" role="button">Add Obat jual</a>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>id User</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>

			</thead>
			<tbody>
				@foreach($obatList as $obat)
				<tr>
					<td>{{ $obat->id}}</td>
					<td>{{ $obat->idUser}}</td>
					<td>{{ $obat->nama}}</td>
					<td>{{ $obat->deskripsi}}</td>
					<td>{{ $obat->harga}}</td>
					<td>
						<a href="{{route('obatEdit', ['id' => $obat->id])}}" role="button" class="btn btn-warning">Edit</a>
						<a href="{{route('obatDelete', ['id' => $obat->id])}}" role="button" class="btn btn-warning">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>

		</table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection