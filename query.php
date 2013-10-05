<?php

//SELECT one_thing, another_thing FROM table WHERE $needle = '$haystack' AND

function where($params) {

$query = "WHERE ";

if(! is_array($params) ) return false;

	foreach($params as $needle => $haystack) {

	$query .= "$needle = $haystack AND ";

	}

//remove last AND&nbsp;
$query = substr($sql, 0, -4);

}

?>
