<html>
<body>
<?php 
$servername="localhost";
$username="root";
$password="mysql";

// create connection 
$conn= new mysqli($servername, $username, $password);

// check connection 

 if($conn->connect_error)
 {
    die("connection failed". $conn->connect_error);
 }
  echo " connected successfully";
  $conn->close();
 ?>  
 </body>
 </html>