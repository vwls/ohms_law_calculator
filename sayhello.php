<?php
// To calculate current:
// $voltage = $_POST['voltage'];
// $resistance = $_POST['resistance'];
// $current = $voltage / $resistance;
// print "Current: ";
// print $current;

// To calculate voltage:

// To calculate resistance:
$voltage = $_POST['voltage'];
$current = $_POST['current'];
$resistance = $voltage / $current;
print "Resistance: ";
print $resistance;
print " ohms"
?>