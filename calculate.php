<?php
if ($_POST['cResistance'] || $_POST['cVoltage']){
  calculateCurrent();
} else if ($_POST['vResistance'] || $_POST['vCurrent']) {
  calculateVoltage();
} else if ($_POST['rVoltage'] || $_POST['rCurrent']) {
  calculateResistance();
} else {
  print "I didn't get any user input";
}

// Function for calculating current
function calculateCurrent(){
  $voltage = $_POST['cVoltage'];
  $resistance = $_POST['cResistance'];
  $current = $voltage / $resistance;
  print "Current: ";
  print $current;
  print " amps";
}

// Function for calculating voltage
function calculateVoltage(){
  $current = $_POST['vCurrent'];
  $resistance = $_POST['vResistance'];
  $voltage = $current * $resistance;
  print "Voltage: ";
  print $voltage;
  print " volts";
}

// Function for calculating resistance
function calculateResistance(){
  $voltage = $_POST['rVoltage'];
  $current = $_POST['rCurrent'];
  $resistance = $voltage / $current;
  print "Resistance: ";
  print $resistance;
  print " ohms";
}


?>

