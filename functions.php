<?php 
    $title = "Functions";
    include 'includes/header.php'; ?>
    <h1>Functions</h1>

    <?php

        //Defining a Function

        function writeMessage(){
            echo "You are really a nice person, have a nice time! <br/>";
        }

        //calling a Function
        writeMessage();

        echo "<hr/>";

        writeMessage();

        //Functions with parameters

        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){
            $num = $num + 10;

        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }

        $num = 250;
        addFunction(5,9);
        addFunction(25,$num);
        addFunction('35',"90");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';

    ?>
<?php require 'includes/footer.php' ?>