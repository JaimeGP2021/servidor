<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <p>
        <?php
        if (isset($_GET['op1']) && !empty($_GET['op1']) && is_numeric($_GET['op1'])) {
            $op1 = trim($_GET['op1']);
        } else {
            echo "<h3>EL primer operando no es correcto</h3>";
        }

        if (isset($_GET['op2']) && !empty($_GET['op2']) && is_numeric($_GET['op2'])) {
            $op2 = trim($_GET['op2']);
        } else {
            echo "<h3>EL segundo operando no es correcto</h3>";
        }

        if (isset($op1, $op2)){
            $res = $op1 + $op2;
            $mensaje = "La suma de $op1 y $op2 es $res.";
        }
        ?>
        <?= $mensaje ?>
    </p>
</body>

</html>
