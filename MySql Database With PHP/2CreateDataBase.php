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

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>