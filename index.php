<?php 

    $title = "Index";
    include 'includes/header.php'; ?>

   <h1>Hello World - PHP Primer</h1> 

   <?php 
   
        echo "Hello PHP";
        echo '<br/>';
        echo 'Second Line';
   
  
        $name = 'Quinten Dunbar';
        $age = '30';

        echo '<br/>';
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';

        echo "<h1>My Name Is: $name </h1>"
   ?>

     <button type="button" class="btn btn-dark">CLICK ME!</button>
     <button type="button" class="btn btn-success">ADD ME!</button>

     <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
  <?php require 'includes/footer.php' ?>