<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
    </style>
</head>
<body>
    
<?php

$current_time = date("H:i");
$morning = "06:00";
$afternoon = "12:00";
$evening = "18:00";
$night = "23:59";
$date1 = DateTime::createFromFormat('H:i', $current_time);
$date2 = DateTime::createFromFormat('H:i', $morning);
$date3 = DateTime::createFromFormat('H:i', $afternoon);
$date4 = DateTime::createFromFormat('H:i', $evening);
$date5 = DateTime::createFromFormat('H:i', $night);

if ($date1 > $date2 && $date1 < $date3)
{
?>
<style>
    body {
        background-image: url('morning.png');
        background-size: 100% auto;
    }
</style>

<div class="upper_text"><p>Goede morgen!</p></div>

<?php
}

if ($date1 > $date3 && $date1 < $date4)
{
?>
<style>
    body {
        background-image: url('afternoon.png');
        background-size: 100% auto;
    }
</style>

<div class="upper_text"><p>Goede middag!</p></div>

<?php
}

if ($date1 > $date4 && $date1 < $date5)
{
?>
<style>
    body {
        background-image: url('evening.png');
        background-size: 100% auto;
    }
</style>

<div class="upper_text"><p>Goede avond!</p></div>

<?php
}

if ($date1 < $date2)
{
?>
<style>
    body {
        background-image: url('night.png');
        background-size: 100% auto;
    }
</style>

<div class="upper_text"><p>Goede nacht!</p></div>

<?php
}

echo "Het is nu ".$current_time;

?>

</body>
</html>