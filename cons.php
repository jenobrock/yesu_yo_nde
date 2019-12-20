<?php
$dem=$_POST['demande'];
$mail='jenovicnginamaut@gmail.com';
mail($mail,"demande de conseil",$dem);
header('location:conseils.php');
?>