<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retângulo</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        flex-direction: column;
        align-items: center;
        text-align: center;
        justify-content: center;
        background-color: #009186;
        color: lightgrey;
    }

    form{
        display: flex;
        text-align: center;
        justify-content: center;
        flex-direction: column;
    }

    h2{
        text-align: center;
    }
</style>
<body>
<h2>Cálculo da área de um Retângulo</h2>
<form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="base">Informe o valor da Base<br></label>
    <input type="text" name="base" id="base">
    <br>
    <label for="base">Informe o valor da Altura<br></label>
    <input type="text" name="altura" id="altura">
    <br>
    <br>
    <button type="text">Resultado</button>
    <br>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        # Calculo de área de um retangulo
        $base = $_POST["base"];
        $altura = $_POST["altura"];;
        $area = $base * $altura;

        echo "<h3 id='Resposta'>Área do Retângulo é: $area</h3>";
    }
?>
</form>
</body>
</html>