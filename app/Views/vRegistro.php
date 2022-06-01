<!DOCTYPE html>
<html>
<head>
    <?php echo view('vHead');?>
	<meta charset="utf-8">
	<title>Registro</title>
</head>
<body>
    <?php echo view('vBar');?>
    

    <form method="POST" action="../home/insertarRegistro">
        <h1>Registro</h1>
	    <div class="row g-3">
    	    <div class="col-md-6">
    		    <label for="nombre" class="form-label">Nombre</label>
    		    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" >
    	    </div>
    	    <div class="col-md-6">
    			<label for="apellido" class="form-label">Apellido</label>
    			<input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido">
    	    </div>
        </div>
        <div class="row g-3">
    	   <div class="col-md-6">
    		    <label for="correo" class="form-label">Email</label>
    		    <input type="email" class="form-control" placeholder="Correo Electrónico" id="correo" name="correo">
    	    </div>
    	    <div class="col-md-6">
    		     <label for="password" class="form-label">Contraseña</label>
    		    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            </div>
        </div>
        <br>
        <br>
         <div class="col-12">
        	<button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </div>
        <br>
        <a class="navbar-brand" href="../home/iniciar">Regresar, click aqui</a>
    </form>

</body>
</html>