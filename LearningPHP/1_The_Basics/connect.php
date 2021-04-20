<?php
  $hostname = "localhost";
  $database = "thaysdb";
  $user = "root";
  $password = "";

  // create a object
  $mysqli = new $mysqli($hostname, $user, $password, $database);

  // test the data base connection
  if($mysqli->connect_errno) {
    echo "Fail to connect: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
  } else {
    echo "connected";
  }
