<!DOCTYPE html>
<html>
<head>
	<?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Registro encontrado</title>
</head>
<body>
	<?php echo view('vnbar');?>
	<form method="POST" action="../home/actualizarRegistro">
		<h1>Registro Encontrado</h1>
			<input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
			<div class="mb-3 row">
				<label class="col-sm-2 col-form-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="descripcion" value="<?php echo $nombre; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-sm-2 col-form-label">Apellido</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-sm-2 col-form-label">Correo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
				<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url(); ?>/home/eliminar/<?php echo $id_usuario; ?>">Eliminar</a>
			</div>
		</form>

</body>
</html>