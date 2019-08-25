<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>USUARIO</title>
</head>
<body background="img\fondo8.jpg" style="background-size: 100%"> 
<h1 style="text-align: center; font-size: 55px ;text-shadow: 4px 2px #8812F7;margin-top: 45px">INSTITUCION EDUCATIVA</h1>
 <div style= " text-align: center; margin-top: 10px;">
    <img src="img/col.png" alt="" width="300" height="250">
    </div>
    
    <div style= " text-align: center">
    
    <form method="post">
        <h1 style="font-size: 18px" >USUARIO</h1>
        <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
        <h1 style="font-size: 18px; margin-top: 20px" >CONTRASEÑA</h1>
        <input type="text" name="usuario" placeholder=" " style="width:150px; height:30px">
        </form>
    </div> 
    <div style= " text-align: center;margin-top: 30px">
    <form action="<?php echo base_url(); ?>index.php/view_inst/INGRESAR" method="post">
    <input type="submit" value="INGRESAR" class="btn btn-outline-danger" style="width:100px; height:50px">
    </form>
    </div>
</body>
</html>