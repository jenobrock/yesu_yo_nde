<?php
$nom=$_POST['name'];
$mail=$_POST['email'];
$sujet=$_POST['subject'];
$message=$_POST['message'];
$text="message de ".$nom."  Message : ".$message;
mail($mail,$sujet,$text);
header('location :index.php');
?>