<?php
  function db_init($hostname, $duser, $dpw, $dname){
    $conn = mysqli_connect($hostname,$duser,$dpw);
    mysqli_select_db($conn,$dname);
    return $conn;
  }
?>
