<?php 
    $title = "While Loops";
    include 'includes/header.php'; ?>

    <h1>While Loops</h1>

    <?php 
        $grade = 0;

        //infinite Loop
      //  while($grade < 10){
        //    echo '<p>I Am Less Than 10!</p>';
        //}

        while($grade <10){
            echo '<p>I Am Less Than 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP';
    
    ?>

    <h1>Do-While Loops</h1>

    <?php 
        do{
            //Post-Condition Loop
            echo '<p>I Am Do While Loop</p>';
            $grade++;

        }while($grade < 20);

        echo 'EXIT LOOP';
    
    
    
    ?>
    
    <?php require 'includes/footer.php' ?>