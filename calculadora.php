<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
</head>

<body>
    <form action="" method="get">
        <label for="op1">Primer operando:
            <input type="number" name="op1" id="op1" />
        </label>
        <br />
        <label for="op2">Segundo operando:
            <input type="number" name="op2" id="op2" />
        </label>
        <br />
        <label for="op">Operación:
            <select name="op" id="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label>
        <br /><button type="submit" name="boton" id="boton" value="True">Calcular</button>
    </form>
    <?php
    require 'auxiliar.php';

    $errores = [];

    $op1 = comprobar_primer_operando($errores);
    $op2 = comprobar_segundo_operando($errores);
    $op = comprobar_operacion($op2, $errores);
    $button = $_GET['boton'];

    if ($button) {
        if (hay_errores($errores)) {
            mostrar_mensajes_error($errores);
        } else {
            $res = calcular_operacion($op1, $op2, $op);
            mostrar_resultado($op1, $op2, $op, $res);
        }
    }
    ?>
</body>

</html>
