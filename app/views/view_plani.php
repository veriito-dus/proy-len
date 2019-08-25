<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>PLANILLAS</title>
        <ul class="nav justify-content-end  nav-pills">
            <li class="">
                <a class="nav-link active" href="#">CERRAR SECCION</a>
            </li>
            </ul>
                <h1 style="font-size: 28px; text-align: center" >INSTITUCION EDUCATIVA</h1>
                
                <ul class="nav justify-content-center nav nav-tabs">
            <li class="">
                <a class="nav-link active" href="#">PLANILLAS</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">HORARIO</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">INICIO</a>
            </li>
        </ul>

    </head>
    <body background="img\cuatro.png" style="background-size: 100%">
        <div style="position: relative; left: 1200px">
            <img src="img/col.png" alt="" width="100" height="90">        
        </div>
        <div style="position: relative; left: 1160px">
            <h1 style="font-size: 18px" >VERONICA DUSSAN</h1>  
        </div>
        <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4" >
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1" style= " text-align: center ;margin-top: 30px">
        <form action="<?php echo base_url(); ?>index.php/view_inst/NOTAS" method="post">
                <input type="submit" value="NOTAS" class="btn btn-primary" style="width:100px; height:50px">
         </form>
         <form action="<?php echo base_url(); ?>index.php/view_inst/CONSOLIDADOS" method="post">
                <input type="submit" value="CONSOLIDADOS" class="btn btn-primary" style="width:150px; height:50px;margin-top: 80px">
         </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4"style= " text-align: center ;margin-top: 30px">
        <form action="<?php echo base_url(); ?>index.php/view_inst/PRUEBA_SABER" method="post">
                <input type="submit" value="PRUEBA_SABER" class="btn btn-primary" style="width:150px; height:50px;">
         </form>
         <form action="<?php echo base_url(); ?>index.php/view_inst/PROMEDIO" method="post">
                <input type="submit" value="PROMEDIO" class="btn btn-primary" style="width:110px; height:50px;margin-top: 80px">
         </form>
        </div> 
    </body>
</html>