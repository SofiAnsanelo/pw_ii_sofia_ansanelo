<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Exerício IMC</title>
</head>
<body>
    <?php
        $peso = 47;
        $altura = 1.63;
        $IMC = $peso/($altura*$altura);

        if ($IMC <= 16,9) {
            echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC"br>Classificação: Muito abaixo do peso";
        } elseif (17 <= $IMC && $IMC <= 18,4) {
            echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Abaixo do peso."
        } elseif (18,5 <= $IMC && $IMC <= 24,9) {
             echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Peso normal"
        } elseif (25 <= $IMC && $IMC <= 29,9) {
             echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Acima do peso";
        } elseif (30 <= $IMC && $IMC <= 34,9) {
             echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Obesidade grau I"
        } elseif (35 <= $IMC && $IMC <= 40) {
             echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Obesidade grau II"
        } else ($IMC < 40) {
             echo"Peso: "$peso"kg.<br>Altura: "$altura"<br>IMC: "$IMC ",br>Classificação: Obesidade grau III"
        }
    ?>
</body>
</html>