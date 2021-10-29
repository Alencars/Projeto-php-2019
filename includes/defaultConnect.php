<?php
  $connect = mysqli_connect("localhost","root","","gymsystems");
  if (!$connect){
    print "Problemas ao conectar no banco";
    exit;
  }
 ?>
