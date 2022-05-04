<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Cubo</title>
</head>
<body>
    <center>
        <h1>Ingresamos al cubo</h1>
        <div>
            <img src="../Img/Img_CuboForm.png" alt="">
            <img src="../Img/FormulaCubo.png" alt="">
        </div>
        <form name="formulario"action="Cubo.php" method="POST">
        <div>
            <label for="">Aristas <b>(Metros)</b> </label>
            <input type="number" name="Arista"><br><br>
            <button type="submit"  name="calcular" class="btn btn-success" value="calcular">Calcular</button>
            <a href="../Html/Index.html" class="btn btn-danger">Volver</a> <br><br>
        </div>
        </form>
        <?php 
        $Resultado=0;
        if(isset($_POST['calcular'])){
            $Arista=$_POST['Arista'];
            $Resultado=6*($Arista*$Arista);
        }
        
        
        ?>
        <label for="">El resultado de la superficie del cubo es de :<b> <?php echo $Resultado ?></b></label>
    </center>
    </body>
</html>



