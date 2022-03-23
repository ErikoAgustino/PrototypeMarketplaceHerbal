@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Obat belanja</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Obat belanja</li>
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
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>

			</thead>
			<tbody>
				@foreach($obatBelanjaList as $obat)
				<tr>
					<td>{{ $obat->id}}</td>
					<td>{{ $obat->user->name}}</td>
					<td>{{ $obat->nama}}</td>
					<td>{{ $obat->deskripsi}}</td>
					<td>{{ $obat->harga}}</td>
					<td>
						<a href="{{route('obatBelanja', ['id' => $obat->id])}}" role="button" class="btn btn-primary">Beli</a>
					</td>
				</tr>
				@endforeach
			</tbody>

		</table>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection