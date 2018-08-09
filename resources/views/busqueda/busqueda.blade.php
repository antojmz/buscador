@extends('index.index')
@section('content')
	<div class="row">
		<br>
		<div class="col-md-12">
			<center>Formulario de Busqueda</center>
		</div>
		<br>
		<br>
		<div class="col-md-12">
			<div class="col-md-3"></div>
			<div class="col-md-4">
				<input type="text" id="InputSearch" class="form-control">
			</div>
			<div class="col-md-5">
				<button id="consultar" class="btn btn-primary">
					Buscar
				</button>
			</div>
		</div>
		<br><br><br>
		<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="DivResult"></div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
@endsection
