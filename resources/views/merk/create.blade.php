@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">MUSEUM</div>
					<div class="panel-heading">Tambah Data Theater
						<div class="panel-title pull-right">
							<a href="{{route('merk.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('merk.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('logo') ? 'has-error' : ''}}">
								<label class="control-label">Logo</label>
								<input type="text" name="logo" class="form-control" required>
								@if ($errors->has('logo'))
									<span class="help-blocks">
										<strong>{{$errors->first('logo')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
								<label class="control-label">Name</label>
								<input type="text" name="name" class="form-control" required>
								@if ($errors->has('name'))
									<span class="help-blocks">
										<strong>{{$errors->first('name')}}</strong>
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