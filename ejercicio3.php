<?php
class Imagenes
{

    public function Imagen()
    {
        echo '<img src="img/tux.jpg"  width="500" height="600">';
    }
}
$imagen = new Imagenes();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>FORMULARIO DE PRUEBA</h1>
    <form action="ejercicio3.php" method="post">
        <input type="number" name="numero" require><br><br>
        <button type="submit">Enviar Informacion</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for ($i = 1; $i <= $_POST["numero"]; $i++) {
            $imagen->Imagen();
        }
    }

    ?>

</body>

</html>