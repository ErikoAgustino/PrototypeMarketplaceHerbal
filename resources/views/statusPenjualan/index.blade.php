@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Status penjualan</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Status penjualan</li>
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
		<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Pembeli</th>
					<th>Nama Obat</th>
					<th>Deskripsi</th>
					<th>Status</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>

			</thead>
			<tbody>
				@foreach($statusPenjualanList as $penjualan)
				<tr>
					<td>{{ $penjualan->id}}</td>
					<td>{{ $penjualan->user->name}}</td>
					<td>{{ $penjualan->obat->nama}}</td>
					<td>{{ $penjualan->obat->deskripsi}}</td>
					<td>{{ $penjualan->status}}</td>
					<td>{{ $penjualan->obat->harga}}</td>
					<td>
						<a href="{{route('updateStatusPenjualan', ['id' => $penjualan->id])}}" role="button" class="btn btn-primary">Sudah dikirim</a>
					</td>
				</tr>
				@endforeach
			</tbody>

		</table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection