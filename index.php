<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atividade Una</title>
    </head>

    <body>
    <h3>Preencha os dados solicitados</h3>
    <form action="" method="post">
        Peso:<input type="number" step="0.1" placeholder="Peso em kg" name="peso">
        Altura:<input type="number" step="0.01" placeholder="Altura em metros" name="altura">
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
        $imc = $_POST['peso'] / ($_POST['altura'] ** 2);

        if ($imc < 18.5) {
            $imc = 'peso baixo!';
        } elseif (18.5 <= $imc && $imc < 24.99) {
            $imc = 'normal!';
        } elseif (25 < $imc && $imc < 29.99) {
            $imc = 'sobrepeso!';
        } else {
            $imc = 'obesidade!';
        }

        echo "O seu imc se classifica como $imc";
    ?>

    </body>
</html>
