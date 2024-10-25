<?php
include 'includes/header.php'; 
?>
    <h1>Contactanos</h1>
    <main>

        <form class="formulario" method="POST" action="index.php">
            <fieldset>
                <legend>Digite todos sus datos </legend>
                <div class="campos">
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="digite nombre completo" required autofocus>
                    </div>
                    <div class="campo">
                        <label for="tel">Telefono</label>
                        <input type="text" name="tel" id="tel" placeholder="+57 3xxxxxx">
                    </div>
                    <div class="campo">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="campo">
                        <label for="men">Mensaje</label>
                        <textarea name="men"  id="men"></textarea>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn" >
                </div>
            </fieldset>
        </form>
    </main>

<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['tel'];
$correo = $_POST['email'];
$mensaje = $_POST['men'];
try {
    require __DIR__.('/includes/conexion_bd.php');

    $sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje');";
    $query = mysqli_query($coneccion, $sql);
    


} catch (\Throwable $th) {
    var_dump($th);
}



include 'includes/footer.php';
?>