<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php 
            if(!isset($_POST['submit'])) {
        ?>
        <h1>Formulario de contacto.</h1>
        <form method="post" name="form-consulta" action="<?php $_SERVER['PHP_SELF'];?>">
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="nombre-persona">Nombre </label>
                    <input name="nombre-persona" type="text" class="form-control" id="nombre-persona" placeholder="Escribe tu nombre" required>
                </div>
                <div class="form-group col-3">
                    <label for="apellido-persona">Apellido</label>
                    <input name="apellido-persona" type="text" class="form-control" id="apellido-persona" placeholder="Escribe tu apellido" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="email-persona">Email</label>
                    <input name="email-persona" type="email" class="form-control" id="email-persona" placeholder="Escribe tu email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="nombre-amigo">Nombre de tu amigo/a</label>
                    <input name="nombre-amigo" type="text" class="form-control" id="nombre-amigo" placeholder="Escribe el nombre de tu amig/a" required>
                </div>
                <div class="form-group col-3">
                    <label for="apellido-amigo">Apellido de tu amigo/a</label>
                    <input name="apellido-amigo" type="text" class="form-control" id="apellido-amigo" placeholder="Escribe el apellido de tu amigo/a" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="email-amigo">Email de tu amigo/a</label>
                    <input name="email-amigo" type="email" class="form-control" id="email-amigo" placeholder="Escribe el email de tu amigo/a" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Enviar recomendación</button>
        </form> 
        <?php
            }
        else {
            $nombre_persona = $_POST["nombre-persona"] ;
            $apellido_persona = $_POST["apellido-persona"];
            $email_persona = $_POST["email-persona"];
            $nombre_amigo = $_POST["nombre-amigo"];
            $apellido_amigo= $_POST["apellido-amigo"];
            $email_amigo= $_POST["email-amigo"];
            $pagina = "www.google.com.ar";
            
            $asunto="Tu amigo/a".$nombre_persona.$apellido_persona." te recomienda el sitio: ".$pagina;
            $destinatario=$email_amigo;
            $cuerpo = '
            <html>
                <body>
                    <h1>Tu amigo/a'.$nombre_persona.' te recomienda visitar un sitio !!!</h1>
                    <p> '.$asunto.'  </p>
                    <p> ¿Que esperas para visitarlo?</p>
                </body>
            </html>
            ';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
            $headers .= "From: Google <googlemaster@gmail.com>\r\n";
            mail($destinatario,$asunto,$cuerpo,$headers);
        ?>
        <?php
        }
        ?>
    </div>
</body>
</html>