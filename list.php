<?php 
$jsonArray = array();
$allName = array('Ramesh', 'Ramesh', 'Ramesh', 'Ramesh', 'Ramesh');
$allGame = array('Cricket', 'Football', 'Basketball', 'Table Tennis', 'Hockey');
foreach($allName as $key=>$name){
	$jsonArray[] = array('name'=>$name, 'game'=>$allGame[$key]);
}
echo json_encode($jsonArray);
?>