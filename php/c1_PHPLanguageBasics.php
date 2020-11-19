<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c1 PHP Language Basics</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c1 PHP Language Basics</h2>
	

    <!--################################################################################################################
    A PHP script is executed on the server, and the plain HTML result is sent back to the browser. 

    Basic PHP Syntax
    A PHP script can be placed anywhere in the document.

    The default file extension for PHP files is ".php".

    A PHP file normally contains HTML tags, and some PHP scripting code.-->

    <?php
        // PHP code goes here
    ?>

    <?php
        echo "Hello World!<br>";
    ?>

    <!--PHP Case Sensitivity
    In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.-->

    <?php
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
    ?>

    <!--However; all variable names are case-sensitive!-->
    <?php
        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $color . "<br>";
        echo "My boat is " . $color . "<br>";
    ?>

    <!--################################################################################################################
        Comments in PHP-->
    
    <?php
        // This is a single-line comment

        # This is also a single-line comment

        /*This is a multiple-lines comment block
        that spans over multiple
        lines
        */
    ?>


    <!--################################################################################################################
        PHP Variables
        
        Creating (Declaring) PHP Variables
        In PHP, a variable starts with the $ sign, followed by the name of the variable:
        
        Rules for PHP variables:

        A variable starts with the $ sign, followed by the name of the variable
        A variable name must start with a letter or the underscore character
        A variable name cannot start with a number
        A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        Variable names are case-sensitive ($age and $AGE are two different variables)
        
        -->

        <?php
            $txt = "Hello world!";
            $x = 5;
            $y = 10.5;
        ?>

    <!--Output Variables-->

    <?php
        $txt = "Maria";
        echo "I love " . $txt . "!<br>";
    ?>

    <!--The following example will output the sum of two variables:
    
    notice that we did not have to tell PHP which data type the variable is.
    PHP automatically associates a data type to the variable, depending on its value.-->

    <?php
        $x = 5;
        $y = 4;
        echo $x + $y. "<br>";
    ?>

    <!--PHP Variables Scope
    
    In PHP, variables can be declared anywhere in the script.
    
    PHP has three different variable scopes:

    -local
    -global
    -static-->

    <!--A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:-->

    <?php
    $x = 5; // global scope

    function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    ?>


    <!--A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:-->

    <?php
    function myTest1() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest1();
    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
    ?>


    <!--The global keyword is used to access a global variable from within a function.-->

    <?php
    $x = 5;
    $y = 10;

    function myTest2() {
        global $x, $y;
        $y = $x + $y;
    }
    myTest2();
    echo $y."<br>"; // outputs 15
    ?>


    <!--PHP The static Keyword
    
    Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes
    we want a local variable NOT to be deleted. We need it for a further job.

    To do this, use the static keyword when you first declare the variable:-->

    <?php
    function myTest3() {
        static $x = 0;
        echo $x."<br>";
        $x++;
    }

    myTest3();
    myTest3();
    myTest3();
    ?>

    <!--################################################################################################################
        PHP echo and print Statements-->

    <!--With PHP, there are two basic ways to get output: echo and print.-->

    <?php
    $txt1 = "Learn PHP";
    $txt2 = "ESGTS";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y."<br>";
    ?>

    <?php
    $txt1 = "Learn PHP";
    $txt2 = "ESGTS";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y."<br>";
    ?>


    <!--################################################################################################################
        PHP Data Types-->

    <!--PHP supports the following data types:

        String
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource
        -->

    <!-- PHP String-->
    <?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    ?>

    <!--PHP Integer
    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    Rules for integers:

    An integer must have at least one digit
    An integer must not have a decimal point
    An integer can be either positive or negative
    Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
    In the following example $x is an integer. 
    
    The PHP var_dump() function returns the data type and value:
    -->

    <?php
    $x = 5985;
    var_dump($x);
    echo "<br>";
    ?>


    <!--PHP Float
     A float (floating point number) is a number with a decimal point or a number in exponential form.-->

    <?php
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    ?>


    <!--PHP Boolean
    A Boolean represents two possible states: TRUE or FALSE.-->
    
    <?php
    $x = true;
    var_dump($x);
    echo "<br>";
    ?>


    <!--PHP Array
    An array stores multiple values in one single variable.-->

    <?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";
    ?>


    <!--
        PHP Object
    Classes and objects are the two main aspects of object-oriented programming.

    A class is a template for objects, and an object is an instance of a class.

    When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

    Let's assume we have a class named Car. A Car can have properties like model, color, etc. 
    We can define variables like $model, $color, and so on, to hold the values of these properties.

    When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, 
    but each object will have different values for the properties.

    If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        -->
    

    <?php
    class Car {
    private $color;
    private $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar -> message();
    echo "<br>";
    ?>

    <!--
    PHP NULL Value
    Null is a special data type which can have only one value: NULL.

    A variable of data type NULL is a variable that has no value assigned to it.

    Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

    Variables can also be emptied by setting the value to NULL:
        -->
    
    <?php
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        echo "<br>";
    ?>

    <!--
    PHP Resource
T   he special resource type is not an actual data type. 
    It is the storing of a reference to functions and resources external to PHP.

    A common example of using the resource data type is a database call.

    We will not talk about the resource type here, since it is an advanced topic.
        -->

    <!--################################################################################################################
    PHP Strings
    
    In this chapter we will look at some commonly used functions to manipulate strings.
    
    Look for PHP String Functions on the line-->


    <!--strlen() - Return the Length of a String-->
    <?php
    echo strlen("Hello world!"); // outputs 12
    echo "<br>";
    ?>

    <!--str_word_count() - Count Words in a String-->
    <?php
    echo str_word_count("Hello world!"); // outputs 2
    echo "<br>";
    ?>

    <!--strrev() - Reverse a String-->
    <?php
    echo strrev("Hello world!"); // outputs !dlrow olleH
    echo "<br>";
    ?>

    <!--strpos() - Search For a Text Within a String-->
    <?php
    echo strpos("Hello world!", "world"); // outputs 6
    echo "<br>";
    ?>

    <!--str_replace() - Replace Text Within a String-->
    <?php
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    echo "<br>";
    ?>


<!--################################################################################################################
    PHP Numbers
    
    INT
    PHP has the following functions to check if the type of a variable is integer:
    is_int()
    is_integer() - alias of is_int()
    is_long() - alias of is_int()
    -->
    <?php
    $x = 5985;
    var_dump(is_int($x));
    echo "<br>";

    $x = 59.85;
    var_dump(is_int($x));
    echo "<br>";
    ?>

    <!--Floats
    PHP has the following functions to check if the type of a variable is float:
    is_float()
    is_double() - alias of is_float()
    -->
    <?php
    $x = 10.365;
    var_dump(is_float($x));
    echo "<br>";
    ?>

    <!--
    PHP Infinity
    A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
    PHP has the following functions to check if a numeric value is finite or infinite:
    is_finite()
    is_infinite()
    -->
    <?php
    $x = 1.9e411;
    var_dump($x);
    echo "<br>";
    ?>

    <!--
    PHP NaN
    NaN stands for Not a Number.
    NaN is used for impossible mathematical operations.
    PHP has the following functions to check if a value is not a number:
    is_nan()
    -->
    <?php
    $x = acos(8);
    var_dump($x);
    echo "<br>";
    ?>

    <!--
    PHP Numerical Strings
    he PHP is_numeric() function can be used to find whether a variable is numeric. 
    The function returns true if the variable is a number or a numeric string, false otherwise.
    -->

    <?php
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";
    ?>

    <!--
    PHP Casting Strings and Floats to Integers
    Sometimes you need to cast a numerical value into another data type.

    The (int), (integer), or intval() function are often used to convert a value to an integer.
    -->

    <?php
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    ?>

    <!--################################################################################################################
    PHP Math
    PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
    Look for PHP math reference for a complete list    -->

    <!--The pi() function returns the value of PI:-->
    <?php
    echo(pi()); // returns 3.1415926535898
    echo "<br>";
    ?>

    <!--The min() and max() functions can be used to find the lowest or highest value in a list of arguments:-->
    <?php
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    echo "<br>";
    ?>

    <!--The abs() function returns the absolute (positive) value of a number:-->
    <?php
    echo(abs(-6.7));  // returns 6.7
    echo "<br>";
    ?>

    <!--The sqrt() function returns the square root of a number:-->
    <?php
    echo(sqrt(64));  // returns 8
    echo "<br>";
    ?>

    <!--The round() function rounds a floating-point number to its nearest integer:-->
    <?php
    echo(round(0.60));  // returns 1
    echo(round(0.49));  // returns 0
    echo "<br>";
    ?>

    <!--The rand() function generates a random number:
    if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):-->

    <?php
    echo(rand(10, 100));
    echo "<br>";
    ?>
    

    <!--################################################################################################################
        PHP Constants
        Constants are like variables except that once they are defined they cannot be changed or undefined.
        define(name, value, case-insensitive)
        -->

    <?php
    define("GREETING", "Welcome to ESGTS!");
    echo GREETING;
    echo "<br>";
    ?>

    <!--PHP Constant Arrays
    In PHP7, you can create an Array constant using the define() function.-->
    <?php
    define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
    echo cars[0];
    echo "<br>";
    ?>

    <!--Constants are automatically global and can be used across the entire script.-->
    <?php
    define("GREETING", "Welcome to ESGTS!");

    function myTest4() {
    echo GREETING;
    }
    
    myTest4();
    echo "<br>";
    ?>

    <!--################################################################################################################
        PHP Operators
        PHP divides the operators in the following groups:

        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators
        -->

    <!--PHP Arithmetic Operators
    +   -   *   /   % (Modulus)   **(Exponentiation)
    -->

    <?php
    $x = 10;  
    $y = 6;
    echo $x % $y;
    echo "<br>";

    $x = 10;  
    $y = 3;
    echo $x ** $y;
    echo "<br>";
    ?>  


    <!--PHP Assignment Operators
    =    +=    -=   *=   /=   %=
    -->
    <?php
    $x = 20;  
    $x += 100;
    echo $x;
    echo "<br>";
    ?> 


    <!--PHP Comparison Operators
    ==   !=   <>   >   >=   <   <=
    -->



    <!--PHP Increment / Decrement Operators
    ++$x	Pre-increment,	Increments $x by one, then returns $x	
    $x++	Post-increment,	Returns $x, then increments $x by one	
    --$x	Pre-decrement,	Decrements $x by one, then returns $x	
    $x--	Post-decrement,	Returns $x, then decrements $x by one
    -->



    <!--PHP Logical Operators
    The PHP logical operators are used to combine conditional statements.
    and	    And	    $x and $y	    True if both $x and $y are true	
    or	    Or	    $x or $y	    True if either $x or $y is true	
    xor	    Xor	    $x xor $y	    True if either $x or $y is true, but not both	
    &&	    And	    $x && $y	    True if both $x and $y are true	
    ||	    Or	    $x || $y	    True if either $x or $y is true	
    !	    Not	    !$x	            True if $x is not true
    -->


    <!--PHP String Operators
    PHP has two operators that are specially designed for strings.
    .	    Concatenation	            $txt1 . $txt2	    Concatenation of $txt1 and $txt2	
    .=	    Concatenation assignment	$txt1 .= $txt2	    Appends $txt2 to $txt1
    -->


    <!--PHP Array Operators
    The PHP array operators are used to compare arrays.
    +	    Union	        $x + $y	    Union of $x and $y	
    ==	    Equality	    $x == $y	Returns true if $x and $y have the same key/value pairs	
    !=	    Inequality	    $x != $y	Returns true if $x is not equal to $y	
    <>	    Inequality	    $x <> $y	Returns true if $x is not equal to $y	
    !==	    Non-identity	$x !== $y	Returns true if $x is not identical to $y
    -->


    <!--PHP Conditional Assignment Operators
    ?:	Ternary	$x = expr1 ? expr2 : expr3	    Returns the value of $x.
                                                The value of $x is expr2 if expr1 = TRUE.
                                                The value of $x is expr3 if expr1 = FALSE
    -->
    <?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");
   ?>  

<!-- Exercício 1 -->


  
<form method = "post">   
Base: <input type="number" name="base">   
<br><br>  
Height: <input type="number" name="altura"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
 
<?php   
if(isset($_POST['submit']))  
    {   
$base = $_POST['base'];   
$height = $_POST['altura'];   
$area = ($base*$height) / 2;   
echo "A área do triângulo é: $area";   
}   
?>  
<br>  
 
<!-- Exercicio 2 -->
 

<form method = "post">   
Raio: <input type="number" name="raio">   
<input type = "submit" name = "submit" value="Calculate">   
</form>    

<?php
if(isset($_POST['submit']))  
{
    $raio=$_POST['raio'];
    $pi = 3.14;
    $area1= $pi * ($raio * $raio);
    echo "Área do círculo é: $area1";
}
    
?>


</body>
</html>