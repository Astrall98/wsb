<?php
  $connect = new mysqli("localhost", "root", "", "project");
  echo "<hr>";
  echo $connect->connect_errno;
 ?>
