<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <div class="title">
            <title> PAGINA ALUMNO</title>
        </div>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div class="titulo">
            <header>
                <h1>Registro de alumnos Instituto i12</h1>
            </header>   
        </div>
     
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2 light-table-filter" data-table="table" type="text"
                placeholder="Buscador">
                <hr>
            </form>
        </div>


            <div class="container">
                    <div class="row"> 
                        
                        <div class="titulosec">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="insertar" name="cod_estudiante" placeholder="cod estudiante">
                                    <input type="text" class="insertar" name="dni" placeholder="Dni">
                                    <input type="text" class="insertar" name="nombres" placeholder="Nombres">
                                    <input type="text" class="insertar" name="apellidos" placeholder="Apellidos">
                                    <select name="carreras" class="insertar">
                                        <option value="default" selected disabled>Seleccione la Carrera</option>
                                        <option value="Tecnicatura Superior en Analisis de Sistemas" >Tecnicatura Superior en Análisis de Sistemas</option>
                                        <option value="Tecnicatura Superior en Desarrollo de Software" >Tecnicatura Superior en Desarrollo de Software</option>
                                        <option value="Tecnicatura Superior en Higiene y Seguridad en el Trabajo">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</option>
                                        <option value="Tecnicatura Superior en Administracion Contable">Tecnicatura Superior en Administración Contable</option>
                                        <option value="Tecnicatura Superior en Administracion Financiera">Tecnicatura Superior en Administración Financiera</option>
                                        <option value="Tecnicatura Superior en Cremonial y Protocolo">Tecnicatura Superior en Ceremonial y Protocolo</option>
                                    </select>
                                    
                                    <input type="submit" class="boton0">
                                </form>
                        </div>
                    </div>  
            </div>
            <div class="tabla">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Carreras</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['carreras']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="boton1">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="boton2">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
    </body>
    <script src="buscador.js"></script>
</html>