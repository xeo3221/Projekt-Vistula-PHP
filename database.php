<!-- // należy włączyć MySQL w XAMPP  -->
<?php
session_start();
$servername = "localhost";
$username = "root";
$connect = mysqli_connect($servername, $username);

$db = "CREATE DATABASE myDB_";
if ($connect->query($db) === TRUE) {
    echo "Database created successfully";
} else {
echo "Error creating database: " . $connect->error;
}
mysqli_select_db($connect, 'myDB_');
$table = "CREATE TABLE `admintable` (
`id` int(255) NOT NULL,
`user` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL
)";
if ($connect->query($table) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $connect->error;
  }

$query = "INSERT INTO `admintable` (`id`, `user`, `password`) VALUES
(1, 'user1', 'user1');";
if ($connect->query($query) === TRUE) {
    echo "New record created successfully";
} else {
echo "Error: " . $query . "<br>" . $connect->error;
}

mysqli_close($connect);   
header('location:adminlogin.php');
?>