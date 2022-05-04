<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Hexagono</title>
</head>
<body>
    <center>
        <h1>Ingresamos al Hexagono</h1>
        <div>
            <img src="../Img/FormImg_Hexagono.jpg" alt="" height="300px" width="300px">
            
        </div>
        <form name="formulario"action="Hexagono.php" method="POST">
        <div>
            <label for="">Ingrese el Valor de un lado <b>(Metros)</b> </label>
            <input type="number" name="ValorLado"><br><br>
            <label for="">Ingrese Apotema <b>(Metros)</b> </label>
            <input type="number" name="Apotema"><br><br>
            <button type="submit"  name="calcular" class="btn btn-success" value="calcular">Calcular</button>
            <a href="../Html/Index.html" class="btn btn-danger">Volver</a> <br><br>
        </div>
        </form>
        <?php 
        $AreaT=0;
        if(isset($_POST['calcular'])){
            $ValorLado=$_POST['ValorLado'];
            $Apotema=$_POST['Apotema'];
            $AreaT=round((($ValorLado*6)*$Apotema)/2,2);
            
        }
        
        
        ?>
       
        <label for="">la superficie total  es de :<b> <?php echo $AreaT ?> M</b></label>
    </center>
    </body>
</html>

