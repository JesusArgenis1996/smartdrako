@extends('layouts.app')

@section('content')
		<div class="row">
			<div class="col-sm-8 offset-sm-2">

				<div class="card">
					<div class="card-header">
						<h6 class="card-text">Registrar Sucursal</h3>
					</div>
					<div class="card-body">
						<form id="form" action="{{url('sucursales') }}" method="post">
						@csrf

							<!--nombre_sucursal-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="nombre_sucursal">Nombre de la sucursal</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal" value="{{ old('nombre_sucursal') }}" />
								</div>
							</div>
							<!--nombre_calle-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="nombre_calle">Nombre de la calle</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="nombre_calle" name="nombre_calle" value=""/>
								</div>
							</div>
							<!--nombre_colonia-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="nombre_colonia">Nombre de la colonia</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="nombre_colonia" name="nombre_colonia" value=""/>
								</div>
							</div>
							<!--numero_exterior-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="numero_exterior">Numero exterior</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="numero_exterior" name="numero_exterior" value=""/>
								</div>
							</div>
							<!--numero_interior-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="numero_interior">Numero interior</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="numero_interior" name="numero_interior" value=""/>
								</div>
							</div>
							<!--codigo_postal-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="codigo_postal">Codigo postal</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value=""/>
								</div>
							</div>
							<!--ciudad-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="ciudad">Ciudad</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="ciudad" name="ciudad" value=""/>
								</div>
							</div>
							<!--pais-->
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="pais">Pais</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="pais" name="pais" value=""/>
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
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script type="text/javascript">
		

		$( document ).ready( function () {
			$( "#form" ).validate( {
				rules: {
					nombre_sucursal: {
						required: true,
					},
					numero_exterior: {
						digits: true,
					},
					numero_interior: {
						digits: true
					},
					codigo_postal: {
						digits: true,
						minlength: 5,
						maxlength: 5
					},
				},
				messages: {
					nombre_sucursal: {
						required: "Es necesario ingresar el nombre de la sucursal",
					},
					numero_exterior: {
						digits: "Es necesario que sean puros digitos"
					},
					numero_interior: {
						digits: "Es necesario que sean puros digitos"
					},
					codigo_postal: {
						digits: "Es necesario que sean puros digitos",
						minlength: "Deben ser 5 digitos",
						maxlength: "deben ser 5 digitos"
					}
					
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