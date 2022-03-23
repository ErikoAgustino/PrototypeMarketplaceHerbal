@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Status belanja</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Status belanja</li>
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
					<th>Penjual</th>
					<th>Nama Obat</th>
					<th>Deskripsi</th>
					<th>Status</th>
					<th>Harga</th>
				</tr>

			</thead>
			<tbody>
				@foreach($statusBelanjaList as $belanja)
				<tr>
					<td>{{ $belanja->id}}</td>
					<td>{{ $belanja->user->name}}</td>
					<td>{{ $belanja->obat->nama}}</td>
					<td>{{ $belanja->obat->deskripsi}}</td>
					<td>{{ $belanja->status}}</td>
					<td>{{ $belanja->obat->harga}}</td>
				</tr>
				@endforeach
			</tbody>

		</table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection