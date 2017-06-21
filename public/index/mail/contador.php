<?php
// Check for empty fields
if(empty($_POST['categoria']))
   {
	echo "No valido!";
	return false;
   }
	
$categoria = $_POST['categoria'];


$con = mysqli_connect("localhost", "rmingredientes", "ZU4@$wuceJu5", "rmingredientes");

$consulta_visita_real = "UPDATE categorias SET `contador` = contador + 1 WHERE id = '$categoria';";
$rs_visita_real = mysqli_query($con, $consulta_visita_real);
echo "ok";

?>