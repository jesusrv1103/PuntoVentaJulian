@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
			<h3>Listado de  Proveedor
				<a href="proveedor/create">
					<button class="btn btn-success">Nuevo</button>
				</a>
				@include('compras.proveedor.search')
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th>Nombre</th>
						<th>Tipo Documento</th>
						<th>Numero Documento</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Opciones</th>
					</thead>	
 					@foreach ($personas as $per)
					<tr>
					
						<td>{{ $per->nombre}}</td>
						<td>{{ $per->tipo_documento}}</td>
						<td>{{ $per->num_documento}}</td>
						<td>{{ $per->telefono}}</td>
						<td>{{ $per->email}}</td>
					   
						<td>
							<a href="{{URL::action('ProvedorController@edit',$per->id)}}">
							<button class="btn btn-info">Editar</button>
							</a>
							<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('compras.proveedor.modal')
					@endforeach
				</table>
			</div>
			{{@$personas->render()}}
		</div>
	</div>
@endsection