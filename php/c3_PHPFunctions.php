<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c3 PHP Functions</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c2 PHP Functions</h2>
	

    <!--################################################################################################################
    PHP Built-in Functions
    PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

    PHP User Defined Functions
    Besides the built-in PHP functions, it is possible to create your own functions.

    A function is a block of statements that can be used repeatedly in a program.
    A function will not execute automatically when a page loads.
    A function will be executed by a call to the function.

    
    Create a User Defined Function in PHP
    -->
    <?php 
    function writeMsg() {
        echo "Hello world!";
    }
    writeMsg(); // call the function
    echo "<br>";
    ?>


    <!--
    PHP Function Arguments
    Information can be passed to functions through arguments. An argument is just like a variable.

    Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
    -->

    <?php
    function familyName($fname) {
        echo "$fname Silver.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>


    <?php
    function familyName1($fname, $year) {
        echo "$fname Silver. Born in $year <br>";
    }

    familyName1("Hege", "1975");
    familyName1("Stale", "1978");
    familyName1("Kai Jim", "1983");
    ?>


    <!--
        PHP is a Loosely Typed Language
    In the example above, notice that we did not have to tell PHP which data type the variable is.

    PHP automatically associates a data type to the variable, depending on its value. 
    Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

    In PHP 7, type declarations were added. 
    This gives us an option to specify the expected data type when declaring a function, 
    and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

    In the following example we try to send both a number and a string to the function without using strict:
    -->
    <?php
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    echo "<br>";
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    ?>



    <!--
        To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

    In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:
    -->
    <?php #declare(strict_types=1);  // strict requirement

    function addNumbers1(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers1(5, "5 days");
    echo "<br>";
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?>

    <!--The strict declaration forces things to be used in the intended way.-->


    <!--PHP Default Argument Value
    The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
    -->
    <?php #declare(strict_types=1); // strict requirement
    function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    ?>

    <!--PHP Functions - Returning values
    To let a function return a value, use the return statement:
    -->
    <?php #declare(strict_types=1); // strict requirement
    
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";
    ?>

    <!-- PHP Return Type Declarations
    PHP 7 also supports Type Declarations for the return statement. 
    Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

    To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
    -->
    <?php #declare(strict_types=1); // strict requirement
    function addNumbers2(float $a, float $b) : float {
        return $a + $b;
    }
    echo addNumbers2(1.2, 5.2);
    ?>



<br>

<!-- Exercício 1-->
<br> Exercício 1
<br>
<form method = "post">   
Voltagem: <input type="number" name="voltagem">
<br><br>
Resistência: <input type="number" name="resistencia">
<br><br>  
Intensidade: <input type="number" name="intensidade">
<br><br>  
<input type = "submit" name = "submit_voltagem" value="Calcular Voltagem">
<input type = "submit" name = "submit_resistencia" value="Calcular Resitência">
<input type = "submit" name = "submit_intensidade" value="Calcular Intensidade">
<br>
<?php

function CalcularVoltagem(){

    $V = $_POST["voltagem"];
    $R = $_POST["resistencia"];
    $I = $_POST["intensidade"];

    if(isset($_POST['submit_voltagem'])){

        $V = $I * $R;
        echo 'A voltagem é: ',$V;
        echo '<br>';
    }
}

function CalcularResistencia(){

    $V = $_POST["voltagem"];
    $R = $_POST["resistencia"];
    $I = $_POST["intensidade"];

    if(isset($_POST['submit_resistencia'])){

        $R = $V/$I;
        echo 'A resistência é: ',$R;
        echo '<br>';
    }
}

function CalcularIntensidade(){

    $V = $_POST["voltagem"];
    $R = $_POST["resistencia"];
    $I = $_POST["intensidade"];

    if(isset($_POST['submit_intensidade'])){

        $I = $V/$R;
        echo 'A intensidade é: ',$I;
        echo '<br>';
    }
}

CalcularVoltagem();
CalcularResistencia();
CalcularIntensidade();

?>
<br>
<!-- Exercício 2-->
<br> Exercício 2
<br>
<form method = "post">   
Voltagem: <input type="number" name="voltagem">
<br><br>
Resistência: <input type="number" name="resistencia">
<br><br>  
Intensidade: <input type="number" name="intensidade">
<br><br>  
<input type = "submit" name = "submit_voltagem" value="Calcular Voltagem">
<input type = "submit" name = "submit_resistencia" value="Calcular Resitência">
<input type = "submit" name = "submit_intensidade" value="Calcular Intensidade">
<br>
<?php

function CalcularVoltagem_part2($V=null,$R=null,$I=null){

    $R = $_POST["resistencia"];
    $I = $_POST["intensidade"];

    if(isset($_POST['submit_voltagem'])){

        $V = $I * $R;
        echo 'A voltagem é: ',$V;
        echo '<br>';
    }
}

function CalcularResistencia_part2($V=null,$R=null,$I=null){

    $V = $_POST["voltagem"];
    $I = $_POST["intensidade"];

    if(isset($_POST['submit_resistencia'])){
        $R=$V/$I;
        echo 'A resistencia é: ',$R;
        echo '<br>';
    }
}

function CalcularIntensidade_part2($V=null,$R=null,$I=null){

    $V = $_POST["voltagem"];
    $R = $_POST["resistencia"];

    if(isset($_POST['submit_intensidade'])){
        $I=$V/$R;
        echo 'A Intensidade é: ',$I;
        echo '<br>';
    }
}

CalcularVoltagem_part2($V=NULL,$R=null,$I=null);
CalcularResistencia_part2($V=NULL,$R=null,$I=null);
CalcularIntensidade_part2($V=NULL,$R=null,$I=null);
?>
<br>
<!-- Exercício 3-->
<br> Exercício 3
<br>

</body>
</html>