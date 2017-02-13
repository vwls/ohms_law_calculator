<?php
// To calculate current:
// $voltage = $_POST['voltage'];
// $resistance = $_POST['resistance'];
// $current = $voltage / $resistance;
// print "Current: ";
// print $current;
// print " amps";

// To calculate voltage:
// $current = $_POST['current'];
// $resistance = $_POST['resistance'];
// $voltage = $current * $resistance;
// print "Voltage: ";
// print $voltage;
// print " volts";

// To calculate resistance:
$voltage = $_POST['voltage'];
$current = $_POST['current'];
$resistance = $voltage / $current;
print "Resistance: ";
print $resistance;
print " ohms"
?>