<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Multifuncional</title>
</head>
<body>
    <h1>Calculadora Multifuncional</h1>

    <!-- Formulário para calcular perímetro e área do círculo -->
    <h2>Perímetro e Área do Círculo</h2>
    <form action="" method="post">
        Raio do círculo: <input type="text" name="raio"><br>
        <input type="submit" name="calcular_circulo" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular_circulo'])) {
        $raio = $_POST['raio'];
        $perimetro = 2 * M_PI * $raio;
        $area = M_PI * pow($raio, 2);
        echo "Raio: $raio<br>";
        echo "Perímetro: $perimetro<br>";
        echo "Área: $area<br>";
    }
    ?>

    <!-- Formulário para calcular a média de 3 notas -->
    <h2>Média de 3 Notas</h2>
    <form action="" method="post">
        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        Nota 3: <input type="text" name="nota3"><br>
        <input type="submit" name="calcular_media" value="Calcular Média">
    </form>

    <?php
    if (isset($_POST['calcular_media'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "A média das notas é: $media<br>";
    }
    ?>

    <!-- Formulário para converter Fahrenheit para Celsius -->
    <h2>Converter Fahrenheit para Celsius</h2>
    <form action="" method="post">
        Temperatura em Fahrenheit: <input type="text" name="fahrenheit"><br>
        <input type="submit" name="converter_para_celsius" value="Converter">
    </form>

    <?php
    if (isset($_POST['converter_para_celsius'])) {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = (5 * ($fahrenheit - 32)) / 9;
        echo "A temperatura em Celsius é: $celsius<br>";
    }
    ?>

    <!-- Formulário para converter Celsius para Fahrenheit -->
    <h2>Converter Celsius para Fahrenheit</h2>
    <form action="" method="post">
        Temperatura em Celsius: <input type="text" name="celsius"><br>
        <input type="submit" name="converter_para_fahrenheit" value="Converter">
    </form>

    <?php
    if (isset($_POST['converter_para_fahrenheit'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "A temperatura em Fahrenheit é: $fahrenheit<br>";
    }
    ?>
</body>
</html>
