<?php

$conn = mysql_connect( 'localhost' ,'root' , '');
$db   = mysql_select_db('footprints');


$sql = "SELECT * from places;";
$res = mysql_query($sql);
$result = array();


while ( $row = mysql_fetch_array($res))
	array_push($result, array ('place_name' => $row[0],
));

echo json_encode(array ("result"=> $result ));
?>