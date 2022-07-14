<?php
$to = $_GET['email'];
$subject =  $_GET['titulo'];
$message = $_GET['texto'];
$headers = 'From: ' . $_GET['emailUser'];

mail($to,$subject,$message,$headers);

echo "<script>window.alert('Email enviado')</script>";

echo "Email enviado para: $to"
?>
<a href="Formulario.html"> Voltar</a>
