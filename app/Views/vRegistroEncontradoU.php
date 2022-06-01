<!DOCTYPE html>
<html>
<head>
	<?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Registro encontrado</title>
</head>
<body>
	<?php echo view('vBarG');?>
	<form method="POST" action="../home/actualizarGasto">
		<h1>Registro Encontrado</h1>
			<input type="hidden" class="form-control" id="id_gasto" name="id_gasto" value="">
			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-2 col-form-label">descripcion</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="descripcion" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="fecha" name="fecha" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cantidad" name="cantidad" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="precio" class="col-sm-2 col-form-label">Precio</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="precio" name="precio" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="subtotal" name="subtotal" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoria" name="categoria" value="">
				</div>
			</div>
			<div class="mb-3 row">
				<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
				<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url(); ?>/Home/eliminarGasto/<?php echo $id_gasto; ?>">Eliminar</a>
			</div>
			
		</form>

</body>
</html>