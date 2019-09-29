<?php 
    $title = "For Loops";
    include 'includes/header.php'; ?>
        <h1>For Loops</h1> 

        <?php 

            for($count = 0; $count < 10; $count++){

                echo '<p>Hello World</p>';
            }

            for($count = 0; $count < 10; $count++){
                echo"<p>The Count Is: $count</p>";
            }
            
            
            
            ?>
<?php require 'includes/footer.php' ?>