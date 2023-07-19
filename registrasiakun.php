<?php 

//koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "falzee_store");

?>
<?php
if (isset($_POST['submit'])) {
    // code...

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO tabel_login (username, password, email) 
                                    VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $query_sql)) {
      echo "<script>
        alert('Selamat anda berhasil registrasi!');
        document.location.href = 'login.php';
    </script>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($conn);
}}
?>
<style>
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
}</style>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTER</title>
    <link rel="icon" type="text/css" href="image/falze.png">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <div id="container">
        <form action="#" method="post">
            <img id="logo" src="image/falzee.jpeg"><br></br>
            <h1><center><div class="LOGIN">REGISTRASI</div></h1></center><br></br>
            <label for="fname" style="color: white;">Username :</label><br></br><hr style="margin-top: -10px;">
            <input type="text" name="username" placeholder="Masukan Username" required><br></br>

            <label for="lname" style="color: white;">Password :</label><br></br><hr style="margin-top: -10px;">
            <input type="password" name="password" placeholder="Masukan Password" required><br></br>

            <label for="lname" style="color: white;">E - Mail :</label><br></br><hr style="margin-top: -10px;">
            <input type="email" name="email" placeholder="Masukan E  - Mail" required style="font-size: 15px;
            width: 100%;
            padding: 12px 20px;
            margin: left;
            box-sizing: border-box;
            border: 2px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            background-size: 50px;
            background-position: 5px 5px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-radius: 5px;"><br></br>

            <input type="submit" name="submit" value="Register" style="margin-left: 150px; width: 200px; height: 35px;">
        </form>
     </div>
</body>

</html>