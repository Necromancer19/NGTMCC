<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229614;
	echo "<br>Database TYIT_229614 selected";
	$collection = $db -> TYITCOL;
	echo "<br>Collection selected successfully";
	
	$document = array(
		"title" => "MongoDB",
		"description" => "database",
		"likes" => 100,
		"URL" => "https://www.mongo.com",
		"by" => "NoSQL");
	$collection -> insert($document);
	echo "<br>Document inserted successfully";
?>