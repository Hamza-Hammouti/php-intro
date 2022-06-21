<?php
    echo "<h1>Hello World!</h1>";
?>

<?php
    define("welkomsBericht", "Hello World!");
    echo welkomsBericht;  
?>

<?php
    $txt1 = "Learning PHP";
    $txt1 = welkomsBericht;
    echo "<br>".$txt1;
?>

<?php
    $word1 = "Hello ";
    $word2 = "World!";
    echo "<br>"."<h1>".$word1 . $word2."</h1>";
?>

<?php
    $array = array("Hello ", "World!");
    echo $array[0].$array[1];
?>