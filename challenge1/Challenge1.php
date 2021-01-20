<?php

include("./rainbowIterator.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 01</title>
</head>
<body>
    <?php
        echo "<h1>Using Iterator: $iterator</h1>";

        for ($red = 0; $red < 255; $red += $iterator) { 
            for ($green = 0; $green < 255; $green += $iterator) { 
                for ($blue = 0; $blue < 255; $blue += $iterator) {
                echo "<span style='background-color: rgb($red,$green,$blue)' title='" . sprintf("#%02x%02x%02x", $red, $green, $blue) . "'></span>";
                }
            }
        }
    
    ?>
</body>

<style>
        span {
            height: 30px;
            width: 30px;
            margin: 0 2px;
            border: 2px solid black;
            display: inline-block;
        }
    
    </style>
</html>