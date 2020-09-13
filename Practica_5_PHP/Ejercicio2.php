<html>
    <head>
        <title>Formulario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group col-3">
                    <label for="apellido">Apellido</label>
                    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="consulta">Consulta</label>
                    <textarea name="consulta" class="form-control" id="consulta" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Enviar consulta</button>
        </form> 
        <?php
            }
        else {
            $destinatario = "contacto@gmail.com ";
            $asunto = "Nuevo formulario de contacto";
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $consulta = $_POST["consulta"];

            $cuerpo = '
            <html>
                <body>
                    <h1>Formulario de contacto</h1>
                    <p>
                    <li>Nombre: ' . $nombre . '</li>
                    <li>Apellido: ' . $apellido . '</li>
                    <li>Email: ' . $email . '</li>
                    <li>Mensaje: ' . $consulta . '</li>
                    </p>
                </body>
            </html>
            ';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
            $headers .= "From: Contacto <contacto@gmail.com>\r\n";
            mail($destinatario,$asunto,$cuerpo,$headers)
        ?>
        <?php
        }
        ?>
        </div>
    </body>
</html>