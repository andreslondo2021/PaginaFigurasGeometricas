<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Cono</title>
</head>
<body>
    <center>
        <h1>Ingresamos al Cono</h1>
        <div>
            <img src="../Img/Img_conoForm.png" alt="">
            <img src="../Img/AreaImg_FormCono.jpg" alt="">
        </div>
        <form name="formulario"action="Cono.php" method="POST">
        <div>
            <label for="">Radio <b>(Metros)</b> </label>
            <input type="number" name="Radio"><br><br>
            <label for="">Generatriz <b>(Metros)</b> </label>
            <input type="number" name="Generatriz"><br><br>


            <button type="submit"  name="calcular" class="btn btn-success" value="calcular">Calcular</button>
            <a href="../Html/Index.html" class="btn btn-danger">Volver</a> <br><br>
        </div>
        </form>
        <?php 
        $AreaL=0;
        $AreaT=0;
        if(isset($_POST['calcular'])){
            $Radio=$_POST['Radio'];
            $Generatriz=$_POST['Generatriz'];
            $AreaL=round( (pi()*$Radio*$Generatriz),2);
            $AreaT=round(  $AreaL+(pi()*($Radio*$Radio)),2);
            
        }
        
        
        ?>
        <label for="">El resultado de la superficie lateral del cono es de :<b> <?php echo $AreaL ?> M</b></label><br><br>
        <label for="">la superficie total  es de :<b> <?php echo $AreaT ?> M</b></label>
    </center>
    </body>
</html>

