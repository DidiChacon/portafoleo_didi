<?php
include './includes/header.php';
?>
    <main class="containercontacto">
        <form class="contacto" method="POST">
            <fieldset class="uno">
                <legend class="formulario">Digite todos sus datos</legend>

                <div class="campos">


                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                    </div>

                    <div class="campo">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" placeholder="+57...">
                    </div>

                    <div class="campo">
                        <label for="correo">Email</label>
                        <input type="text" name="email" id="email" placeholder="gmail">
                    </div>

                    <div class="campo">
                        <label for="men">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="comunicado"></textarea>
                    </div>


                    <input type="submit" class="input">

                </div>

            </fieldset>

        </form>

        </div>

    </main>
    <?php
    
    $nombre= $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    try {
        require __DIR__.('/includes/conexion_bd.php');
        $sql= "INSERT INTO formulario (nombre,telefono,correo,mensaje) VALUES('$nombre','$telefono','$email','$mensaje');";
        $query= mysqli_query($coneccion, $sql);
       
    } catch (\Throwable $th) {
        var_dump($th);
    }

   

        include './includes/footer.php';
        ?>

<script src="./scrip/scrip1.js"> </script>
