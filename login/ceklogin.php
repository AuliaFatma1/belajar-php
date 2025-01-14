<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "admin" && $pass == "R4h4514"){
    echo "Anda berhasil Login";
    echo "<br>";
    echo "Username : ". $user;
    echo "<br>";
    echo "Password : ". $pass;
    echo "<br>";
  
    echo "<a href='logout.php'>Logout</a>";
}else{
    echo "Maaf, Username dan Password tidak cocok";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}



?>