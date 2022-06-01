<!DOCTYPE html>
<html>
<head>
    <?php echo view('vHead');?>
    <meta charset="utf-8">
    <title>Registro</title>
</head>
<body>
    <?php echo view('vBarG');?>
    

    <form method="POST" action="../home/insertarGasto">
        <h1>Compras</h1>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="Descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" placeholder="Descripcion" id="descripcion" name="descripcion">
            </div>
            <div class="col-md-6">
                <label for="Fecha" class="form-label">Fecha</label>
                <input type="Date" class="form-control" placeholder="Fecha" id="fecha" name="fecha">
            </div>
        </div>
         <div class="row g-3">
           <div class="col-md-6">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" placeholder="Cantidad" id="cantidad" name="cantidad" >
            </div>
            <div class="col-md-6">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" placeholder="Precio" id="precio" name="precio" >
            </div>
            </div>
        </div>
        <div class="row g-3">
           <div class="col-md-6">
                <label for="subtotal" class="form-label">Subtotal</label>
                <input type="text" class="form-control" placeholder="Subtotal" id="subtotal" name="subtotal" >
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputc">Categoria</label>
                <select id="inputc" class="form-control" name="categoria"  >
                    <option value="1">Alimentación</option>
                    <option value="2">Vestimenta</option>
                    <option value="3">Transporte</option>
                    <option value="4">Entretenimiento</option>
                    <option value="5">Salud</option>

                </select>
            </div>
        </div>
        <br>
        <br>
         <div class="col-12">
            <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
        </div>
    </form>

</body>
</html>