<html>


<?php include("Linker.php"); ?>

<?php

$Honda = new car("Honda Civic");
echo "Stefan's full name: " . $stefan->get_name();

$james = new employee("Johnny Toes");
echo "--->" . $james->get_name();

// echo "Tell me private stuff" . $stefan->$pin_number
// $jimmy = new person();
// $stefan->set_name("Stefan Fishook");
// $jimmy->set_name('Jimmy Neutron');

// echo "Stefan's full name: "; $stefan->get_name();
// echo "Jimmy's full name: "; $jimmy->get_name();

 ?>


</html>
