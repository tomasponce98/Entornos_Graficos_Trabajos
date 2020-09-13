<?php
$destinatario = "tomasponce@outlook.com.ar";
$asunto = "Contacto PHP";
$cuerpo = '
<html>
    <head>
        <title>Envio de mail</title>
    </head>
    <body>
        <h1>Envío de mail.</h1>
        <p>
            <b>ESTO ES UNA PRUEBA</b>.
        </p>
      <p>
        Tomás Ponce
      </p>
      <p>
        Gracias.
      </p>
    </body>
</html>
';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers .= "From: Tomás Ponce <tomasponce@outlook.com.ar>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers)
?> 