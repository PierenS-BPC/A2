<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
$width = $_POST['width'];
$height = $_POST['height'];
?>

<?php

echo "Your browser is: $browser";
echo "Your screen resolution is $width x $height";
?>
