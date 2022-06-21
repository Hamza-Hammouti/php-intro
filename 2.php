<?php

$getal1 = rand(10,1000);
$getal2 = rand(10,1000);

$getal3 = $getal1 + $getal2;
$getal4 = $getal1 - $getal2;
$getal5 = $getal1 * $getal2;
$getal6 = $getal1 / $getal2;

echo $getal1." + ".$getal2." = ".$getal3."<br>";
echo $getal1." - ".$getal2." = ".$getal4."<br>";
echo $getal1." x ".$getal2." = ".$getal5."<br>";
echo $getal1." : ".$getal2." = ".$getal6."<br><br>";

?>

<?php
$numbers = array(3, 5, 8, 12);
    function tafelRekenen($getal) {
        for ($x = 1; $x <= 10; $x+=1) {
            echo $x." x ".$getal." = ".($x*$getal)."<br>";
        }
    }    
foreach ($numbers as $getal){
    echo "<hr>";
    tafelRekenen($getal);
}
?>