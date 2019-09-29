<?php 
    $title = "PHP String Manipulation";
    include 'includes/header.php'; ?>
    
<h1>PHP String Manipulation</h1>
<?php 
    //concatenation of strings
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "quinten dunbar";
    echo $phrase1 . ", named Tiffany, " .$phrase2;
    echo '<br/>';

    //string transformation
    echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
    echo 'Upper case: ' . strtoupper($name). '<br/>';
    echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
    echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
    echo 'Get a substring: ' . substr($name, 4, 10). '<br/>';

    echo 'Get position of string: ' .strpos($name, 't'). '<br/>';

    echo 'Find Character "T": ' .strchr($name, 'T'). '<br/>';
    echo 'Find Character "t": ' .strchr($name, 't'). '<br/>';
    echo 'Find Character "n": ' .strchr($name, 'n'). '<br/>';

    echo 'Find Length of String: ' .strlen($name). '<br/>';

    echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
    echo 'Trim spaces on both sides: '. "A" . trim(" B C D ")  . "E" . '<br/>';
    echo 'Trim spaces on the left: '. "A" . ltrim(" B C D ")  . "E" . '<br/>';
    echo 'Trim spaces on the left: '. "A" . rtrim(" B C D ")  . "E" . '<br/>';

    echo ' Replace string with another: '.str_replace("stand", "sit", $phrase2) . '<br/>';

    


?>

<?php require 'includes/footer.php' ?>