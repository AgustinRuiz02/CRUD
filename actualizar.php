<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link href="style2.css" rel="stylesheet">
        <title>Actualizar</title>
        
        
    </head>
    <body>
                <div class="container">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                
                                <input type="text" class="insertar" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="insertar" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="insertar" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <select name="carreras" class="insertar">
                                <option value="default" selected disabled>Seleccione la Carrera</option>
                                        <option value="Tecnicatura Superior en Analisis de Sistemas" >Tecnicatura Superior en Análisis de Sistemas</option>
                                        <option value="Tecnicatura Superior en Desarrollo de Software" >Tecnicatura Superior en Desarrollo de Software</option>
                                        <option value="Tecnicatura Superior en Seguridad e Higiene">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</option>
                                        <option value="Tecnicatura Superior en Administracion Contable">Tecnicatura Superior en Administración Contable</option>
                                        <option value="Tecnicatura Superior en Administracion Financiera">Tecnicatura Superior en Administración Financiera</option>
                                        <option value="Tecnicatura Superior en Cremonial y Protocolo">Tecnicatura Superior en Ceremonial y Protocolo</option>
                                </select value="<?php echo $row['carreras']  ?>">> 
                                
                            <input type="submit" class="boton" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>