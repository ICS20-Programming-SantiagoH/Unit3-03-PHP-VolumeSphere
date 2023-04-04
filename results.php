<?php

// get the measurements from the textfields
$radius = $_POST['radius'];

// calculate the volume
$volume = 4.0 / 3.0 * pi () * pow ($radius,3);

// Display the volume
echo "<h3>Results:</h3> The volume of the sphere is " . round($volume, 2) . "cm³"
?>