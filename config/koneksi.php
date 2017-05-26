<?php
  session_start();
  $mysqli = new mysqli("localhost", "root", "", "db_mreza");

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

?>
