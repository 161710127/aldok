@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Edit Data Artikel</h3>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('artikel.index')}}"> Kembali</a>
					</div>
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<div class="panel-body">
					<form action="{{ route('artikel.update',$artikel->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group row">
								<label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Artikel') }}</label>

								<div class="col-md-6">
									<input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{ $artikel->judul }}" >
									@if ($errors->has('judul'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('judul') }}</strong>
									</span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="kategoriartikels_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>

								<div class="col-md-6">
									<select name="kategoriartikels_id" class="form-control">
										@foreach($kategoriartikels as $data)
										<option value="{{ $data->id}}" {{$selectedkategoriartikels == $data->id ? 'selected="selected"' : '' }}>{{$data->nama_kategori}}</option>
										@endforeach
									</select>

									@if ($errors->has('kategoriartikels_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kategoriartikels_id') }}</strong>
									</span>
									@endif
								</div>
							</div>


							<div class="form-group row">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                                <div class="col-md-6">
                                    <input id="gambar" type="file" name="gambar" class="form-control" accept="img/*" required autofocus>
                                    @if ($errors->has('gambar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gambar') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


							<div class="form-group row">
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

								<div class="col-md-6">
									<textarea id="ckeditor" type="text" class="ckeditor"{{ $errors->has('deskripsi') ? ' is-invalid' : '' }} name="deskripsi" value="{{ old('deskripsi') }}" required="">{{ $artikel->deskripsi }}</textarea>
								@if ($errors->has('deskripsi'))
								<span class="invalid-feedback" role="alert">
									<strong>{!! $errors->first('deskripsi') !!}</strong>
								</span>
								@endif
								</div>
							</div>

                            <!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection

