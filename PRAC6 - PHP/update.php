<?php
	$m = new MongoClient();
	echo "Connection to the database successful";
	
	$db = $m -> TYIT_229614;
	echo "<br>Database TYIT_229614 selected";
	$collection = $db -> TYITCOL;
	echo "<br>Collection selected successfully";
	
	$collection -> update(array(
		"title" => "MongoDB"),array('$set' => array(
			"title" => "MongoDB",
			"likes" => 45,
			"URL" => "http://www.mongodb.com",
			"by" => "NoSQL")));
	echo "<br>Document updated successfully";
	$cursor = $collection -> find();
	echo "<br>Updated Document";
	foreach($cursor as $document)
	{
		echo $document["title"]."<br>";
	}
?>
			