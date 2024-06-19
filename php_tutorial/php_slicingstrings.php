<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
echo substr($x, 6, 5);
echo substr($x, 6); //slice to the end
echo substr($x, -5, 3); //from the end
echo substr($x, 5, -3); //negative length

?> 

</body>
</html>