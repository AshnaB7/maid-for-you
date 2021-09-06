<?php
 $servername = "localhost";
 $username = "root";
 $paswd = "";
 $dbname = "maid_for_you";

 $conn = mysqli_connect($servername,$username,$paswd,$dbname);

 if($conn)
 {
     //echo "Connection Ok";
 }
 else
 {
     echo "Connection failed".mysqli_connect_error();
 }
?>