<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibonacci</title>
</head>
<body>
    <?php 
        $fibo =  1; $n = 0;
        echo $n , " ";
        echo $fibo , " ";

        for ($x = 1 ; $x < 8 ; $x++) {
            $fibo = $fibo + $n;
            $n = $fibo - $n;
            echo $fibo , " ";
        }
        ?>
</body>
</html>