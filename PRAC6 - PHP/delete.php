<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229614;
	echo "<br>Database TYIT_229614 selected";
	$collection = $db -> TYITCOL;
	echo "<br>Collection selected successfully";
	
	$collection -> remove(array(
		"title" => "MongoDB"));
	echo "<br>Document deleted successfully";
	$cursor = $collection -> find();
	echo "<br>Updated Document";
	foreach($cursor as $document)
	{
		echo $document["title"]."<br>";
	}
?>