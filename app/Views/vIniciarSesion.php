<!DOCTYPE html>
<html>
<head>
	<?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Bienvenida</title>
</head>
<body>
	<?php echo view('vBar');?>
	<br>
    <br>
	<form ethod="POST" action="../home/iniciarSesion">
        <h1>Login</h1>
        <div class="form-group">
            <label for="correo"></label>
            <input type="email" class="form-control" id="correo" placeholder="Correo">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Acceder</button>
        <br>
        <a class="navbar-brand" href="../home/registro">No tienes una cuenta, click aqui</a>
    </form>

</body>
</html>