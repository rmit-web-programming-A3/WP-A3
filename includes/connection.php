<?php

// these lines will show all errors (never do this in a live environment!)
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);

$dbFile = 'webprogramming.db';

// create a connection to the SQLite DB file using PDO
$connection = new PDO('sqlite:' . $dbFile);
// throw exceptions when there is an error
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// return db rows as objects
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

if(!empty($_GET['insertName']) && !empty($_GET['insertType'])) {
    $query = 'INSERT INTO pets(name, type) VALUES (:nameVal, :typeVal)';
    $sth = $connection->prepare($query);
    // add data from get params
    $sth->bindParam(':nameVal', $_GET['insertName']);
    $sth->bindParam(':typeVal', $_GET['insertType']);
    if($sth->execute() == 1)
        echo "Data successfully inserted.";
    else
        echo "Failed to insert.";

} else {
    $query = 'SELECT * FROM pets';
    $sth = $connection->prepare($query);
    $sth->execute();
    // pre tags are quick way to display newline characters
    echo "<pre>";
    // print everything out
    print_r($sth->fetchAll());
    echo "</pre>";      
}

// close db
$connection = null;