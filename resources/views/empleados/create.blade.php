@extends('layouts.app')

@section('content')
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="card">
					<div class="card-header">
						<h6 class="card-text">Registrar Empleado</h3>
					</div>
					<div class="card-body">
						<form id="form" action="{{url('empleados') }}" method="post">
						@csrf

							<!--id_sucursal-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="sucursal_id">Eligue una sucursal</label>
								
            					<select class="form-control" id="sucursal_id" name="sucursal_id">
                					@foreach($sucursales as $sucursal)
                						<option value="{{$sucursal->id}}">{{$sucursal->nombre_sucursal}}</option>
                					@endforeach
            					</select>
        						
							</div>
							<!--nombre_empleado-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="nombre_empleado">Nombre del empleado</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" value=""/>
								</div>
							</div>
							<!--RFC-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="RFC">RFC</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="RFC" name="RFC" value=""/>
								</div>
							</div>
							<!--puesto-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="puesto">Puesto</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="puesto" name="puesto" value=""/>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-9 offset-sm-4">
									<button type="submit" class="btn btn-primary" name="registrar" value="registrar">Registrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
  
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script type="text/javascript">
		

		$( document ).ready( function () {
			$( "#form" ).validate( {
				rules: {
					nombre_empleado: {
						required: true,
					},
					RFC: {
						required: true,
					},
					sucursal_id: {
						required: true
					},
					
				},
				messages: {
					nombre_empleado: {
						required: "Es necesario ingresar el nombre del empleado",
					},
					RFC: {
						digits: "Es necesario escribir el RFC"
					},
					sucursal_id: {
						digits: "Necesitas elegir una sucursal"
					},
					
				},
				
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );
	</script>
@endsection