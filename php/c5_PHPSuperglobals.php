<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c5 PHP Superglobals</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c5 PHP Superglobals</h2>
	

    <!--################################################################################################################
    PHP Global Variables - Superglobals
    Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

    The PHP superglobal variables are:

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
        -->


    <!--
        PHP $GLOBALS
    $GLOBALS is a PHP super global variable which is used to access global variables 
    from anywhere in the PHP script (also from within functions or methods).

    PHP stores all global variables in an array called $GLOBALS[index]. 
    The index holds the name of the variable.
    -->

    <?php
    $x = 75;
    $y = 25;
    
    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    addition();
    echo $z;
    ?>


    <!--
        PHP $_SERVER
    $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

    The example below shows how to use some of the elements in $_SERVER:

    Look for PHP $_SERVER info
    -->

    <?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>



    <!--
        PHP $_REQUEST
    PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

    The example below shows a form with an input field and a submit button. 
    When a user submits the data by clicking on "Submit", 
    the form data is sent to the file specified in the action attribute of the <form> tag. 
    In this example, we point to this file itself for processing form data. 
    If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
    Then, we can use the super global variable $_REQUEST to collect the value of the input field:
    -->

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>




    <!--
        PHP $_POST
    PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
    $_POST is also widely used to pass variables.

    The example below shows a form with an input field and a submit button. 
    When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. 
    In this example, we point to the file itself for processing form data. 
    If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
    Then, we can use the super global variable $_POST to collect the value of the input field:
    -->

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>




    <!--
        PHP $_GET
    PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

    $_GET can also collect data sent in the URL.

    The GET method sends the encoded user information appended to the page request. 
    The page and the encoded information are separated by the ? character.

    -->

    <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
    </form>

    <?php
    if( $_GET["name"] || $_GET["age"] ) {
        echo "Welcome ". $_GET['name']. "<br />";
        echo "You are ". $_GET['age']. " years old.";
        
        exit();
    }
?>

    
</body>

</html>