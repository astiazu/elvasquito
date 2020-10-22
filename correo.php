<?php
    $destinatario='astiazu@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "enviado desde la pagina El Vasquito";
    $mensajeCompleto = $mensaje . "\n Atentamente: " .$nombre;

    mail($destinatario, $mensajeCompleto, $email, $header);
    
    echo "<script>alert('correo enviado exitosamente')</script>";    
    echo "<script> setTimeout(\"location.href='index.html'\",10000)</script>";
?>