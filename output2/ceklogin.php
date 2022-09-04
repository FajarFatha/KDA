<?php

session_start();

include "koneksi.php";


$username = test_input($_POST["username"]);
$password = test_input(md5($_POST["password"]));

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$query="SELECT * FROM user WHERE user.username='$username' AND user.password='$password'";
$login=mysqli_query($koneksi,$query);

$cek=mysqli_num_rows($login);

if($cek>0){
    $data=mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['login']=true;
        $_SESSION['nama']=$data['nama'];
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";

        header("location:admin.php");
    }else if($data['level']=="user"){
        $_SESSION['login']=true;
        $_SESSION['nama']=$data['nama'];
        $_SESSION['username']=$username;
        $_SESSION['level']="user";

        header("location:user.php");
    }
}else{
	echo"<script>
    alert('Username atau password salah')
    document.location.href='index.php'
    </script>";
}

?>