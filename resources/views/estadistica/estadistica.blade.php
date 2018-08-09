@extends('index.index')
@section('content')
	<div class="row">
		<br>
		<div class="col-md-12">
			<center>Estadisticas de Busqueda</center>
		</div>
		<br>
		<br>
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table">
					<thead>
						<th>N° de Busquedas</th>
						<th>Producto</th>
					</thead>
					<tbody>
						@foreach ($estadistica as $est)
							<tr>
								<td>{{$est->count}}</td>
								<td>{{$est->descripcion}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
@endsection
