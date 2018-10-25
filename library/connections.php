<?php

/**
 * Database connections
 */

function acmeConnect(){
    $server = "localhost";
    $database = "acme";
    $username = "Client1";
    $password = "swimjumpwealthflavor";
    $dsn = 'mysql:host=' .$server .';dbname=' . $database;
    $options = array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION);

  // Create the actual connection object and assign it to a variable
 try {
  $link = new PDO($dsn, $username, $password, $options);
  return $link;
 } catch(PDOException $e) {
  header('Location: /acme/view/500.php');
  exit;
 }
}

/* testing */
acmeConnect();
