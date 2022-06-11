<?php
session_start();

// $con = mysqli_connect('localhost', 'root' );
// if($con){
// 	echo "conenction successful";
// }else{
// 	echo "no connection";
// }

// $db = mysqli_select_db($con, 'adminpanel');

// if(isset($_POST['submit'])){
// 	$username = $_POST['user'];
// 	$password = $_POST['password'];

// 	$sql = " select * from  admintable where user='$username' and password='$password' ";
// 	$query = mysqli_query($con,$sql);

// 	$row = mysqli_num_rows($query);
// 		if($row == 1){
// 			echo "login successful";
// 			$_SESSION['user'] = $username;
// 			header('location:adminmainpage.php');
// 		}else{
// 			echo "login failed";
// 			header('location:adminlogin.php');
// 		}
// }
  

$connect = mysqli_connect('localhost', 'root' );
if($connect){
	echo "conenction successful";
}else{
	echo "no connection";
}

mysqli_select_db($connect, 'myDB_');

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$password = $_POST['password'];

	$var = " select * from  admintable where user='$user' and password='$password' ";
	$result = mysqli_query($connect,$var);

	$row = mysqli_num_rows($result);
    if($row == 1){
        echo "login successful";
        $_SESSION['user'] = $user;
        header('location:adminmainpage.php');
    }else{
        echo "login failed";
        header('location:adminlogin.php');
    }
}  

?>