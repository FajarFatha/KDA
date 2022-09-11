<?php
	session_start();
	if($_SESSION['level']!='admin' || empty($_SESSION['login'])){
        echo"<script>
        alert('Anda Tidak Berhak Mengakses Halaman Ini')
        document.location.href='index.php'
        </script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN ADMIN</h1>
    <h2>Selamat datang <?php echo "$_SESSION[level] $_SESSION[nama]"?></h2>
    <form action="logout.php" method="POST">
        <input type="submit" value="logout">
    </form>
</body>
</html>