@extends('templante/menu')

@section('content')
	<div class="row">
		<div class="col-lg-9">
			<div class="box box-success">
				{{ Form::open(['route' => 'productoras.store', 'method' => 'post']) }}
					<div class="box-header">
						<h3 class="box-title">
							AGREGAR
						</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									{{ Form::label('NOMBRE : ') }}
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-globe">
											</i>
										</span>
										{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Nombre']) }}
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="box-footer">
					{{ Form::submit('Guardar', ['class' => 'btn btn-success btn-block']) }}
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="col-lg-3">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">
						ACCIONES
					</h3>
				</div>
				<div class="box-body">
					{{ Form::open(['method' => 'get', 'route' => ['productoras.index']]) }}
						{{ Form::button('Lista de productoras', ['type' => 'submit', 'class' => 'btn btn-success btn-block '] )  }}
					{{ Form::close() }}
					<br>
				</div>
				<div class="box-footer">

				</div>
			</div>
		</div>
	</div>

@endsection