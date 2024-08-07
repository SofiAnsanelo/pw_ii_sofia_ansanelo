<?php
    //Lista: https://github.com/gabriel-trevisan/ExerciciosPHP/blob/master/topics/Easy.md
    //RYan, Sofia e Bia
    //Ex1
    function soma($n1, $n2){
        $sum = $n1+$n2;
        return $sum;
    }
    echo soma(5,10);

    //Ex2
    function area($base, $altura){
        $area = ($base*$altura)/2;
        return $area;
    }
    echo area(5,10);

    //Ex3
    function getLastItem($a, $b, $c){
        $array = array($a, $b, $c);
        echo $array[2];
    }
    echo  getLastItem(10, 5, 25);

    //Ex4
    function check($a, $b, $c, $d, $e){
        $array = array($a, $b, $c, $d, $e);
        if (in_array());
    }

   //Ex5
    function animals($num_g, $num_v, $num_p){
        $array = array($num_g, $num_v, $num_p);
        $galinha = $num_g * 2;
        $vaca = $num_v * 4;
        $porco = $num_p * 4;
        echo $galinha," ", $vaca," ", $porco;
    }
    echo animals(2, 3, 5);

    //Ex6
    function menornum($n1, $n2){
        if $n1 > $n2 {
            return $n2;
        } elseif ($n2 > $n1){
            return $n1;
        } elseif ($n1 == $n2){
            echo "Os dois números são iguais";
        }
    }
    echo menornum(20, 30);

    //Ex7
    function acharmMenorN($array) {
        return min($array);
    }

    //Ex8
    function faltaN($A, $n) {
        for ($i = 0; $i < $n; $i++)
    if ($A[$i] != ($i + 1))
        return ($i + 1);

    return $n + 1;
        }
    $A = [1, 2, 3, 4, 5, 6 , 7, 8, 9, 10];
    $n = sizeof($A);
    //echo faltaN($A, $n);
    
    //Ex9
    function eNatal(){
        $hoje = date('d/m');
        //$hoje = "25/12";
        if ($hoje == "25/12") {
            return true;
        } else {
            return false;
        }
    }
    echo eNatal();
    
    //Ex10
    function validaEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "<h1>O email é valido</h1>";
        } else {
            return "<h1>o email é invalido</h1>";
        }
    }
    $email = "receba@gmail.com";
    echo validaEmail($email);
    
?> 
