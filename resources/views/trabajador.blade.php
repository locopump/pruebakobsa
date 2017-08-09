<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>.::PRUEBA KOBSA::.</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="js/trabajador.js"></script>
	<script type="text/javascript">
		var RUTA = 'http://localhost/pruebakobsa/public/';
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	</script>
</head>
<body>
	<div class="content">
		<h1>Ver listado de pago</h1>
		<table id="principal" border="1" cellpadding="0" cellspacing="1">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellidos P.</th>
					<th>Apellido M.</th>
					<th>Direcci&oacute;n</th>
					<th>Tel&eacute;fono</th>
					<th>Email</th>
					<th>Foto</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
                @foreach($workers as $worker)
            	<tr>
            		<td>{{$worker->nomtra }}</td>
            		<td>{{$worker->apepattra }}</td>
            		<td>{{$worker->apemattra }}</td>
            		<td>{{$worker->dirtra }}</td>
            		<td>{{$worker->teltra }}</td>
            		<td>{{$worker->emailtra }}</td>
            		<td>{{$worker->foto }}</td>
            		<td>Editar</td>
            	</tr>
                @endforeach
			</tbody>
		</table>
		<div>
			<a href="#" class="setWorker">Crear Nuevo Trabajador</a>
		</div>
		<div class="newWorker">
			<h2>Nuevo Trabajador</h2>
			<form action="" method="post">
			<table>
				<tr>
					<td><strong>Nombre</strong></td>
					<td><input type="text" class="txtnombre"></td>
				</tr>
				<tr>
					<td><strong>Apellido Paterno</strong></td>
					<td><input type="text" class="txtapepat"></td>
				</tr>
				<tr>
					<td><strong>Apellido Materno</strong></td>
					<td><input type="text" class="txtapemat"></td>
				</tr>
				<tr>
					<td><strong>Direcci&oacute;n</strong></td>
					<td><input type="text" class="txtdir"></td>
				</tr>
				<tr>
					<td><strong>Email</strong></td>
					<td><input type="text" class="txtemail"></td>
				</tr>
				<!-- <tr>
					<td><strong>Foto</strong></td>
					<td><input type="text" class="txtnombre"></td>
				</tr> -->
			</table>
			</form>
		</div>
	</div>

</body>
<script>
	$.ajax({
        type: "POST",
        // dataType: "json",
        data: { "estado" : true},
        url: RUTA+"newWorker",
        success: function(resultado) {
        	var cuerpo = resultado;
        }
	});
</script>
</html>