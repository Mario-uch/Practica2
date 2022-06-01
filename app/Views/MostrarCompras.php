<!DOCTYPE html>
<html>
<head>
	<?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Mostrar</title>
</head>
<body>
	<?php echo view('vBarG');?>


	<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
				<th scope="col">Descripción</th>
				<th scope="col">Fecha</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Precio</th>
				<th scope="col">Subtotal</th>
				<th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php 
					
				$db =\Config\Database::connect();
				$query = $db->query("SELECT * FROM gastos");
				foreach ($query->getResult('array') as $usuario) { ?>
				<tr>
					<td><?php echo $usuario['id_gasto']; ?></td>
					<td><?php echo $usuario['descripcion'];     ?></td>
					<td><?php echo $usuario['fecha'];   ?></td>
					<td><?php echo $usuario['cantidad'];     ?></td>
					<td><?php echo $usuario['precio'];   ?></td>
					<td><?php echo $usuario['subtotal'];   ?></td>
					<td><?php echo $usuario['categoria'];   ?></td>
				</tr>
			<?php } ?>
		</tbody>
    </table>

</body>
</html>