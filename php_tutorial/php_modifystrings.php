<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
echo strtoupper($x); //uppercase
echo "<br>";
echo strtolower($x); //lowercase
echo "<br>";
echo str_replace("World", "Dolly", $x); //replace string
echo "<br>";
echo strrev($x); //reverse
echo "<br>";
echo trim($x); //remove whitespace
?> 

</body>
</html>