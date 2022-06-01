<!DOCTYPE html>
<html>
<head>
	<?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Mostrar</title>
</head>
<body>
	<?php echo view('vnbar');?>


	<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Correo</th>
				<th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
					
				$db =\Config\Database::connect();
				$query = $db->query("SELECT * FROM registro");
				foreach ($query->getResult('array') as $usuario) { ?>
				<tr>
					<td><?php echo $usuario['id_usuario']; ?></td>
					<td><?php echo $usuario['nombre'];     ?></td>
					<td><?php echo $usuario['apellido'];   ?></td>
					<td><?php echo $usuario['correo'];     ?></td>
					<td><?php echo $usuario['password'];   ?></td>
				</tr>
			<?php } ?>
		</tbody>
    </table>

</body>
</html>