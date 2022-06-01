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
        <div class="row g-3">
            <div class="col-md-6">
                <label for="descripcion" class="form-label">descripcion</label>
                <input type="text" class="form-control" placeholder="descripcion" id="descripcion" name="descripcion" >
            </div>
            <div class="col-md-6">
                <label for="fecha" class="form-label">Cantidad</label>
                <input type="date" class="form-control" placeholder="fecha" id="fecha" name="fecha">
            </div>
        </div>
        <div class="row g-3">
           <div class="col-md-6">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" placeholder="cantidad Electrónico" id="cantidad" name="cantidad">
            </div>
            <div class="col-md-6">
                 <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" placeholder="precio" id="precio" name="precio">
            </div>
            <div class="col-md-6">
                 <label for="subtotal" class="form-label">subtotal</label>
                <input type="number" class="form-control" placeholder="subtotal" id="subtotal" name="subtotal">
            </div>
            <div class="col-md-6">
                 <label for="categoria" class="form-label">categoria</label>
                <input type="text" class="form-control" placeholder="categoria" id="categoria" name="categoria">
            </div>
        </div>
        <br>
        <br>
         <div class="col-12">
            <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
        </div>
        <br>
    </form>

</body>
</html>