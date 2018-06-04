@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">MUSEUM</div>
					<div class="panel-heading">Tambah Data Theater
						<div class="panel-title pull-right">
							<a href="{{route('tipe.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('tipe.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
								<label class="control-label">Name</label>
								<input type="text" name="Name" class="form-control" required>
								@if ($errors->has('Name'))
									<span class="help-blocks">
										<strong>{{$errors->first('Name')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('merk_id') ? 'has-error' : ''}}">
								<label class="control-label">Merk</label>
								<select class="form-control" name="merk_id">
									<option>Pilih Merk</option>
									@foreach($merks as $data)
									<option value="{{$data->id}}">{{$data->name}}</option>
									@endforeach
								</select>

								@if ($errors->has('merk_id'))
									<span class="help-blocks">
										<strong>{{$errors->first('merk_id')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection