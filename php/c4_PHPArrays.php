<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>c3 PHP Arrays</title>
</head>

<body>
	<h1>School - PHP</h1>
    <h2>c2 PHP Arrays</h2>
	

    <!--################################################################################################################
    An array stores multiple values in one single variable:
    -->
    <?php
    $cars = array("Volvo", "BMW", "Toyota"); 
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>


    <!--
        In PHP, there are three types of arrays:

        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
        Multidimensional arrays - Arrays containing one or more arrays
    -->



    <!--
    Get The Length of an Array - The count() Function
    The count() function is used to return the length (the number of elements) of an array:
    -->
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        echo "<br>";
    ?>
    <!--Look for arrays functions-->


    <!--Numeric Array
    These arrays can store numbers, strings and any object but their index will be represented by numbers. 
    By default array index starts from zero.-->


    <!--Example #1 'short syntax array'-->
    <?php
        $a = [1, 2, 3, 4];
        print_r($a);
        echo "<br>";
        print_r($a[0]);
        echo "<br>";
    ?>

    <?php
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
    ?>


    <!--
        Associative Arrays
        The associative arrays are very similar to numeric arrays in term of functionality 
        but they are different in terms of their index. 
        Associative array will have their index as string 
        so that you can establish a strong association between key and values.
        -->


    <!--Example 'short syntax associative array'-->
    <?php
        $a = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
        print_r($a);
        echo "<br>";
        print_r($a['one'])
    ?>

    <?php
         /* First method to associate create array. */
         $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
         
         /* Second method to create array. */
         $salaries['mohammad'] = "high";
         $salaries['qadir'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />";
    ?>

    <!--
        Multidimensional Arrays
        A multi-dimensional array each element in the main array can also be an array. 
        And each element in the sub-array can be an array, and so on. 
        Values in the multi-dimensional array are accessed using multiple index.
        -->
    
    <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br>"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br>"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br>"; 
    ?>


<!--
    Write a PHP script to sort the following associative array :

    array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sorting by Value
    d) descending order sorting by Key
    -->

<?php
    echo "Associative array : Ascending order sort by value";
    $array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    asort($array2);
    foreach($array2 as $y=>$y_value){
        echo "Age of ".$y." is : ".$y_value."<br>";
    }
    
    echo "Associative array : Ascending order sort by Key";
    $array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    ksort($array3);
    foreach($array3 as $y=>$y_value){
        echo "Age of ".$y." is : ".$y_value."<br>";
    }

    echo "Associative array : Descending order sorting by Value";
    $age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    arsort($age);
    foreach($age as $y=>$y_value){
        echo "Age of ".$y." is : ".$y_value."<br>";
    }

    echo "Associative array : Descending order sorting by Key";
    $array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    krsort($array4);
    foreach($array4 as $y=>$y_value){
        echo "Age of ".$y." is : ".$y_value."<br>";
    } 
?>
<br>
<!-- Exercício 1-->
<br> Exercício 1
<br>
<?php
$a = [1,2,3,4,5,6,7,8,9,10];
echo max($a);
echo '<br>';
echo min($a);
echo '<br>';
echo array_sum($a)/count($a);
echo '<br>';
?>

<br>
<!-- Exercício 2-->
<br> Exercício 2
<br>
<?php
echo '<b> Saída: </b>';
echo '<br>';
$color = array('white', 'green', 'red');
foreach( $color as $cor ) {
    echo  $cor. ",";
 }
echo '<br>';
echo '<br>';
 foreach( $color as $cor2 ) {
    echo "&#9787". $cor2. "<br>";
 }
?>

<!-- Exercício 3-->
<br> Exercício 3
<br>
<?php

$color = array ( 
"color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo'<br>';
echo $color ['holes'][5].'<br>';
echo $color ['color']['a']. "<br>";
?>

<!-- Exercício 4-->
<br> Exercício 4
<br>
<?php
echo rand(0,10);
?>

</body>

</html>