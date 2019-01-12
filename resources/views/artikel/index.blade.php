@extends('layouts.admin')
@section('content')

<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Artikel</h3>
					<div class="card-title pull-right">
						<a href="{{route('artikel.create')}}">Tambah Data Artikel<i class="fa fa-plus"></i></a>
					</div>
				</div>

				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
                                <th>No</th>
								<th>Judul</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
								<th colspan="3" style="text-align: center;">ACTION</th>
							</tr>
						</thead>

						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($artikel as $data)
							<tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul}}</td>
                                <td>{{ $data->kategoriartikels->nama_kategori}}</td>
                                <td><img src="{{asset('/assets/img/gambar/'.$data->gambar.'')}}" width="70" height="70"></td>
                                <td>{!! $data->deskripsi !!}</td>
								<td>
									<a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{ route('artikel.destroy', $data->id) }}" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" onClick="return confirm('Are You Absolutely Sure You Want to Delete the Data?')">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
