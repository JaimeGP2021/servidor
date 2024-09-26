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
            echo "<h3>El primer operando no es correcto</h3>";
        }

        if (isset($_GET['op2']) && !empty($_GET['op2']) && is_numeric($_GET['op2'])) {
            $op2 = trim($_GET['op2']);
        } else {
            echo "<h3>El segundo operando no es correcto</h3>";
        }

        $operadores = ['+', '-', '*', '/'];
        if (isset($_GET['op']) && !empty($_GET['op']) && in_array($_GET['op'], $operadores)) {
            $op = trim($_GET['op']);
        } else {
            echo "<h3>El operador no es correcto</h3>";
        }

        if (isset($op1, $op2, $op)) {
            switch ($op) {
                case '+':
                    $res = $op1 + $op2;
                    $mensaje = "La suma de $op1 y $op2 es $res.";
                    break;

                case '-':
                    $res = $op1 - $op2;
                    $mensaje = "La resta de $op1 y $op2 es $res.";
                    break;

                case '*':
                    $res = $op1 + $op2;
                    $mensaje = "La multiplicación de $op1 y $op2 es $res.";
                    break;

                case '/':
                    $res = $op1 / $op2;
                    $mensaje = "La división de $op1 entre $op2 es $res.";
                    break;

                default:
                    $mensaje = "Algo salió mal";
                    break;
            }
        }
        ?>
        <?= $mensaje ?>
    </p>
</body>

</html>
