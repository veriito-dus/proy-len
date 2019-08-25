<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>INCIO</title>
</head>
<body background="img\fondo1.jpg" style="background-size: 100%"> 
<h1 style="text-align: center; font-size: 85px ;text-shadow: 4px 2px #96F712;margin-top: 25px">BIENVENIDOS</h1>
<h1 style="text-align: center;font-size: 28px; margin-top: 80px" >INSTITUCION</h1>

    <div style= " text-align: center; margin-top: 30px;">   
        <form method="post">
        <input type="text" name="usuario" placeholder="USUARIO" style="width:150px; height:30px">
        </form>
    </div> 
    <div style= " text-align: center;margin-top: 30px;">
    <form action="<?php echo base_url(); ?>index.php/view_inst/INGRESAR" method="post">
    <input type="submit" value="INGRESAR" class="btn btn-success" style="width:100px; height:50px">
    </form>
    </div>
</body>
</html>