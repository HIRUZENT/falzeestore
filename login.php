<?php 
$conn=mysqli_connect("localhost","root","","falzee_store");
error_reporting(0);

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql= "SELECT * FROM tabel_login WHERE username= '$username' AND password= '$password'  ";

$result = mysqli_query($conn,$sql);

if($result ->num_rows>0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username']=$row['username'];
    echo "
    <script>
        document.location.href = 'falzeee.php';
    </script>
    ";
}else {echo "
    <script>
        alert('Username / Password salah');
    </script>
    ";
}
}
?>
<style>
.container{
    font-weight: bold;
}
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
html{
    scroll-behavior: smooth;
    overflow: scroll;
    overflow-x: hidden;
    scroll-behavior: smooth;
}
::-webkit-scrollbar{
    width: 0px;}
::-webkit-scrollbar-thumb{
    background: black;

</style>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="icon" type="text/css" href="image/falze.png">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <div id="container">
        <form action="" method="post">
            <img id="logo" src="image/falzee.jpeg"><br></br>
            <h1><center><div class="LOGIN">LOGIN</div></h1></center><br></br>
            <label for="fname" style="color: white;">Username :</label><br></br><hr style="margin-top: -10px;">
            <input type="text" name="username" placeholder="Masukan Username" required><br></br>
            <label for="lname" style="color: white;">Password :</label><br></br><hr style="margin-top: -10px;">
            <input type="password" name="password" placeholder="Masukan Password" required><br></br>
        <p style="color: white;">Belum punya akun? <a href="registrasiakun.php" style="color: blue;">Registrasi</p>
            <input type="submit" name="submit" value="LOGIN" style="margin-left: 150px; width: 200px; height: 35px; font-weight: bold;">
        </form>
     </div>
</body>
</html>