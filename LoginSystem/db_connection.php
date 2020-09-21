<?php
    //create connection to Mongo DB
    $connection = new MongoClient();
    echo "Successfully connected!";

    //select the database
    $dataBase = $connection -> login_system;
    echo "Successfully selected login_system database";

    //create 'user' collection
    $collection = $dataBase -> createCollection("user");
    echo "Successfully created user collection";
?>