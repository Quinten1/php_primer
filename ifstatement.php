<?php 
    $title = "If - Else Statement";
    include 'includes/header.php'; ?>

        <h1>If - Else Statement</h1>
    <?php 
    echo '<h1>If Statement</h1>';

    $grade = 80;

    if($grade >= 50){
        echo '<h3 style="color: green">You Have Passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You Have Failed</h3>';
    }
    $grade = 'C';

    if($grade == 'A'){
        echo '<h2 style="color: green">You Are A Superstar</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: blue">You Did Well</h2>';
    }
    else{
        echo '<h2 style="color: red">You Have Failed</h2>';
    }
    
    
    
    ?>
<?php require 'includes/footer.php' ?>