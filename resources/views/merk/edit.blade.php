@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">MUSEUM</div>
					<div class="panel-heading">Edit Data Theater
						<div class="panel-title pull-right">
							<a href="{{route('merk.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('merk.update', $merks->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('logo') ? 'has-error' : ''}}">
								<label class="control-label">Logo</label>
								<input type="text" name="logo" class="form-control" value="{{$merks->logo}}" required>
								@if ($errors->has('logo'))
									<span class="help-blocks">
										<strong>{{$errors->first('logo')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
								<label class="control-label">Name</label>
								<input type="text" name="name" class="form-control" value="{{$merks->name}}" required>
								@if ($errors->has('name'))
									<span class="help-blocks">
										<strong>{{$errors->first('name')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection