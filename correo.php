<?php
    $destinatario= 'vareco654@gmail.com';

    $nombre =$_POST['nombre'];
    $email= $_POST['email'];
    $telefono=$_POST['telefono'];
    $asunto= "Mas informacion sobre Loteo Aeropuerto";
    $mensaje=$_POST['mensaje'];

    $header="Esta persona solicito contactarlo desde la Landing Page: ";
    $mensajeCompleto= "Nombre: ". $nombre ."\nEmail: ".$email . "\nTelefono: ".$telefono ."\nMensaje: ".$mensaje;
    

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>