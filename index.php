<html>


<?php include("Linker.php"); ?>

<?php

$Honda = new car("Honda Civic");
echo "Honda Civic" . $Honda->get_model();

$Chevy = new car("Chevy Cruze ");
echo "Chevy Cruze" . $Chevy->get_model();


 ?>


</html>
