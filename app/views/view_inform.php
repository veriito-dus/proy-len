<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>INFORMACION</title>
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
    </ul>

</head>
<body background="img\dos.png" style="background-size: 100%">
<h1 style="text-align: center; font-size: 65px ;text-shadow: 4px 2px #FFFFFF;margin-top: 25px">BIENVENID@</h1>
<div class="container">
    <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <h1 style="font-size: 18px; margin-top: 30px" >NOMBRES</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
            <h1 style="font-size: 18px;margin-top: 30px" >APELLIDOS</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
            <h1 style="font-size: 18px;margin-top: 30px" >DIRECCION</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
            <h1 style="font-size: 18px; margin-top: 30px" >EDAD</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
            <h1 style="font-size: 18px; margin-top: 30px" >CORREO</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
            <h1 style="font-size: 18px; margin-top: 30px" >NUMERO TELEFONICO</h1>
            <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
        </div> 
        <div style="position: relative; left: 300px"> 
            <img src="img/col.png" alt="" width="300" height="250">
    </div>
</div>
    <div style= " text-align: center ;margin-top: 30px">
         <form action="<?php echo base_url(); ?>index.php/view_inst/INGRESAR" method="post">
                <input type="submit" value="INGRESAR" class="btn btn-danger" style="width:100px; height:50px;">
         </form>
    </div>
    
</body>
</html>