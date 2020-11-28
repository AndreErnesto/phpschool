<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c2 PHP Decisions and Loops</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c2 PHP Decisions and Loops</h2>
	

    <!--################################################################################################################
    PHP if...else...elseif Statements
    
    Conditional statements are used to perform different actions based on different conditions.

    In PHP we have the following conditional statements:

    if statement - executes some code if one condition is true
    if...else statement - executes some code if a condition is true and another code if that condition is false
    if...elseif...else statement - executes different codes for more than two conditions
    switch statement - selects one of many blocks of code to be executed
    -->



    <!--PHP - The if Statement
    The if statement executes some code if one condition is true.
    -->
    <?php
    $t = date("H");    #vai buscar a hora

    if ($t < "20") {
        echo "Have a good day!";   
    }
    echo "<br>";
    ?>

    <!--PHP - The if...else Statement
    The if...else statement executes some code if a condition is true and another code if that condition is false.-->
    <?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
    echo "<br>";
    ?>

    <!--PHP - The if...elseif...else Statement
    The if...elseif...else statement executes different codes for more than two conditions.
    -->
    <?php
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } 
    elseif ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
    echo "<br>";
    ?>

    <!--The PHP switch Statement
    Use the switch statement to select one of many blocks of code to be executed.
    -->
    <?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":{
        echo "Your favorite color is red!";
        break;
        }
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<br>";
    ?>



    <!--################################################################################################################
        PHP Loops

        Loops are used to execute the same block of code again and again, as long as a certain condition is true.

        In PHP, we have the following loop types:

        while - loops through a block of code as long as the specified condition is true
        do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        for - loops through a block of code a specified number of times
        foreach - loops through a block of code for each element in an array
        -->

    
    <!--The PHP while Loop
    The while loop executes a block of code as long as the specified condition is true.
    -->

    <?php
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;            #atenção à incrementação ou decrementação para sair do ciclo
    }
    echo "<br>";
    ?>


    <!--
        The PHP do...while Loop
    The do...while loop will always execute the block of code once, 
    it will then check the condition, and repeat the loop while the specified condition is true.

    Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. 
    This means that the do...while loop will execute its statements at least once, even if the condition is false.
    -->

    <?php
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br>";
    ?>

    <!--The PHP for Loop
    The for loop is used when you know in advance how many times the script should run.
    -->
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <!--The PHP foreach Loop
    The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
    -->
    <?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
    
<!-- Exercício 1-->
<br> Exercício 1

<form method = "post">   
Idade: <input type="number" name="idade">  
<br><br>  
<input type = "submit" name = "submit" value="Calcular">
<br>
<?php
if(isset($_POST['submit']))
{
    $idade = $_POST['idade'];

    if ($idade > "0" && $idade <= "6" ) {
        echo "Golfinhos";
    } 
    elseif ($idade >= "7" && $idade <= "10") {
        echo "Infantil";
    }
    elseif ($idade >= "11" && $idade <= "13") {
        echo "Juvenil";
    } 
    elseif ($idade >= "14" && $idade <= "17") {
        echo "Tubarões";
    } 
    elseif ($idade >= "18") {
        echo "Cota";
    } 
    else {
        echo "Idade Inválida";
    }
}
?>
<br>

<!-- Exercício 2-->
<br> Exercício 2
<br>

<form method = "post">   
Nota 1: <input type="number" name="nota1">  
<br><br>
Nota 2: <input type="number" name="nota2">  
<br><br>
Nota 3: <input type="number" name="nota3">  
<br><br>  
<input type = "submit" name = "submit" value="Calcular">
<br>


<?php
$peso1 = 3;
$peso2=  4;
$peso3=  5;

    if(isset($_POST['submit']))
{
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $mediaP = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3*$peso3)) / ($peso1+$peso2+$peso3);

    if ($mediaP > "0" && $mediaP < "7,5" ) {
        echo "Reprovado";
    } 
    elseif ($mediaP >= "7,5" && $mediaP < "9,5") {
        echo "Admitido";
    }
    elseif ($mediaP >= "9,5") {
        echo "Dispensado";
    }
else{
    echo "Dados inválidos";
    }
}
?>

<br>

<!-- Exercício 3-->
<br> Exercício 3
<br>

<form method = "post">   
Número 1: <input type="number" name="num1">  
<br><br>
Número 2: <input type="number" name="num2">  
<br><br>
Número 3: <input type="number" name="num3">  
<br><br>  
<input type = "submit" name = "submit" value="Calcular">
<br>


<?php

if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $maior = max($num1, $num2, $num3);

echo $maior;
}
?>
<br>

<!-- Exercício 4-->
<br> Exercício 4
<br>
<form method = "post">   
Número: <input type="number" name="num">
<br><br>  
<input type = "submit" name = "submit" value="Calcular">
<br>
<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    if ($num % 2 == 0) {
        echo 'Par';
    }
    else{
        echo 'Ímpar';
    }
}
?>

<!-- Exercício 5-->
<br> Exercício 5
<br>
<form method = "post">   
Ano: <input type="number" name="ano">
<br><br>  
<input type = "submit" name = "submit" value="Calcular">
<br>
<?php


if(isset($_POST['submit'])){

    $ano = $_POST['ano'];
    
    if ((($ano % 4) == 0) && ((($ano % 100) != 0) || (($ano %400) == 0))) {
        echo 'Ano Bissexto';
    }
    else{
        echo 'Ano não Bissexto';
    }

}



/* function is_leap_year($ano)
{
    return ((($ano % 4) == 0) && ((($ano % 100) != 0) || (($ano %400) == 0)));
} */
?>
</body>
</html>