--TEST--
preg_replace_callback_array() 2
--FILE--
<?php

var_dump(preg_replace_callback_array());
var_dump(preg_replace_callback_array(1));
var_dump(preg_replace_callback_array(1,2));
var_dump(preg_replace_callback_array(1,2,3));
$a = 5;
var_dump(preg_replace_callback_array(1,2,3,$a));
$a = "";
var_dump(preg_replace_callback_array(array("" => ""),"","",$a));
$a = array();
var_dump(preg_replace_callback($a,$a,$a,$a));

echo "Done\n";
?>
--EXPECTF--	
Warning: preg_replace_callback_array() expects at least 2 parameters, 0 given in %s on line %d
NULL

Warning: preg_replace_callback_array() expects at least 2 parameters, 1 given in %s on line %d
NULL

Warning: preg_replace_callback_array() expects parameter 1 to be array, integer given in %s on line %d
NULL

Warning: preg_replace_callback_array() expects parameter 1 to be array, integer given in %s on line %d
NULL

Warning: preg_replace_callback_array() expects parameter 1 to be array, integer given in %s on line %d
NULL

Warning: preg_replace_callback_array() expects parameter 3 to be integer, string given in %s on line %d
NULL

Warning: preg_replace_callback() expects parameter 4 to be integer, array given in %s on line %d
NULL
Done