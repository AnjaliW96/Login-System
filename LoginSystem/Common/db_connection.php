<?php
    //create connection to Mongo DB
	$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");

	// select the database
	$databaseName = "login_system.user";
?>