<?php
include('head.php'); //Incluye en archivo head

$usuario1 = array("usuario" => "patricio", "clave" => "patricio2022");
$usuario2 = array("usuario" => "juanp", "clave" => "juanp20222");
$usuario3 = array("usuario" => "martin", "clave" => "martin20222");

$usuarios = array($usuario1, $usuario2, $usuario3);

$username = $_POST['username'];
$password = $_POST['password'];


$salida = false;
foreach ($usuarios as $key => $row) {
    $usuario = $row['usuario'];
    $clave = $row['clave'];

    if(($usuario == $username)&&($clave==$password)){
    	$salida = true;
    }
}


if($salida){
	$salida = "BIENVENIDO ".$username;
}
else{
	$salida = "ERROR DE LOGUEO";
}
?>

<body class="fondo">
<div class="container"><br><br>
  	
  <div class="card" style="background-color: white"><br>
  	
    <h2 class="text-primary" style="padding-left: 10px; text-align: center;">
  		<?php 
    		echo $salida;
  		?>
  	</h2><br>

  <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
  
</div>
</body>

?>