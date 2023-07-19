<!DOCTYPE html>
<html>
<?php 

  $conn = mysqli_connect("localhost", "root", "", "falzee_store");

 ?>


<style>
select {
  margin-bottom: 1em;
  padding: 20px;
  width: 300px;
  border: 0;
  border-bottom: 5px solid currentColor; 
  font-weight: bold;
  letter-spacing: .15em;
  border-radius: 0;
  &:focus, &:active
    outline: 0;
    border-bottom-color: #59C1BD;
  }
}

.images {
  width: 300px;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3px 3px 3px 3px;
  overflow: hidden;
  box-shadow: 0 20px 15px -15px rgba(#000, .5);
  img,
  .loader,
  .no-selection
    display: none;
    letter-spacing: .15em;
    font-weight: bold;
  }
  &[data-selected=""]:not(.loading) {
    background: #eee;
    .no-selection 
      display: block;
    }
  }

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="indexcs.css">
    <link rel="icon" type="text/css" href="image/falze.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Falzee Store - Top Up game termurah</title>
</head>
    <header>Falzee store
    <div class="search">
      <input style="text-align: center; width: 300px; height: 30px; border-radius: 20px;" type="text" placeholder="Mau cari apa?" >
    </div><div class="icon">
      <li> <a href="login.php">
          <label><span><i class="fa-solid fa-user" style="color: white;"></i><span></label><p style="margin-top: -45px;
          margin-bottom: -25px; margin-left: 40px; margin-right: -20px; 
    position: relative;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-decoration: none;
    overflow: hidden;
    transition: 0.2s;
    color: white;
    font-weight: bold;
    text-align: center;
    text-decoration: none;">Login</p>
             </a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
  </head>
  <body>
    <nav>
      <ul class="item">
        <li><a href="falzee.php">Home</li></a>
        <li><a href="#aboutus">About Us</li></a>
      </ul>
    </nav>
  </header>
  <div class="isi" style="height: 100px; width: 100px; justify-content: center; margin-left: 260px; padding-top: 20px; margin-bottom: 788px;"> 

<form action="" method="post">
  	<table border="0" style="background-color: #000000; padding-top: 100px; padding-left: 100px; padding-right: 260px; justify-content: center; border-radius: 0px; padding-bottom: 130px;">

  		<td style="color: white; font-size: 20px; font-weight: bold;">Masukkan USER ID :
  		<input style="text-align: center; border-bottom: 5px solid currentColor; font-weight: bolder; width: 300px; font-size: 18px; height: 50px; border-radius: 10px;" type="text" placeholder="USER ID" ></td>
  			<td style="color: white; font-size: 20px; font-weight: bold;">Masukkan SERVER ID :
  		<input style="text-align: center; border-bottom: 5px solid currentColor; font-size: 18px; width: 300px; height: 50px; border-radius: 10px; font-weight: bold;"  type="text" placeholder="ZONE ID" ><td style="padding-left: 600px;"></td>
      <tr>
  	<tr> 
 <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
      <td style="color: white; font-size: 20px; font-weight: bold;">Pilih Nominal TopUp :
      <div class="diamonds-options">
       <select id="nama" style="font-size: 18px;" onchange="hargadm()">
              <option selected="selected" disabled="disabled">Diamonds</option>
              <option value="Rp.500,-">3 Diamonds</option>
              <option value="Rp.2000,-">18 Diamonds</option>
              <option value="Rp.100.000,-">145 Diamonds</option>
              <option value="Rp.500.000,-">544 Diamonds</option>
        </select>
            <script type="text/javascript">
              function hargadm(){
                var data = document.getElementById("nama").value;
                document.getElementById("harga").value=data;
              }
            </script>
      </div><td style="color: white; font-size: 20px; font-weight: bold;">Masukkan E - mail :
      <input style="text-align: center; border-bottom: 5px solid currentColor; font-size: 18px; width: 300px; height: 50px; border-radius: 10px; font-weight: bold;"  type="text" placeholder="E - mail" ><td style="padding-left: 200px;"></td>
      <tr><tr>
 <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
      <td style="color: white; font-size: 20px; font-weight: bold;">Pilih Metode Pembayaran :
            <select  name="mpembayaran" id="pemb" data-selected="" style="font-size: 18px;">
              <option selected="selected" disabled>Pembayaran</option>
        <?php $qry = $conn->query("SELECT * FROM metode_pembayaran");
          while ($data = $qry->fetch_assoc()) {?>
            <option value="<?= $data['id_metodepem']; ?>"><?= $data['metodepem']; ?></option>
          <?php }  ?>
</select><tr style="color: white; font-weight: bold; font-size: 20px;">
          <td>harga : <input style="background-color: black; font-weight: bold; font-size: 30px; color: white; border: 1px white;" disabled type="text" name="harga" id="harga"></td>
          <tr><td colspan="1" style="color: white; font-size: 20px; font-weight: bold; padding: 20px;">*Harga sudah termasuk PPN.<td style="color: white; padding: 20px; font-weight: bold;" colspan="2" rowspan="55">Top up AOV Diamond hanya dalam hitungan detik! Cukup masukan Username AOV Anda, pilih jumlah Diamond yang Anda inginkan, selesaikan pembayaran, dan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda. Bayarlah menggunakan GoPay, ShopeePay, Dana, OVO, LinkAja</td><td></td></td>
        </tr>
        <td rowspan="20" colspan="1" style="color: white; font-size: 12px; padding: 21px; font-weight: bold; height: 50px;"><input type="submit" name="kirim" value="Bayar" style="width: 200px; height: 50px; font-weight: bold;"></tr></td>
</td>
        </tr>
        <td colspan="2" style="color: white; padding-right: ;">  </tr>
</tr></td></table><img src="image/gambaraov.jpg" style="border-radius: 20px; margin-left: 1030px; width: 550px; margin-top: -720px; margin-bottom: 700px; background-color: white; padding: 5px;">
</form></div></body>
<body>
  <footer>
    <section class="aboutus" id="aboutus">
    <center>ABOUT US</center>
    <h1><pre>Falzee Store</h1>
    <h2>Falzee store adalah website untuk melakukan jasa transaksi isi ulang voucher game, Falzee Store berdiri sejak 21 November 2021, didirikan oleh 2 orang siswa sekolah menengah, ia memulai karirnya hanya dengan bermodalkan smartphone miliknya, hingga usahanya saat ini Falzee Store terus berkembang, terdapat banyak sekali pilihan game di website Falzee Store, selain banyak pilihannya
    banyak juga keuntungannya, dan yang paling penting harganya murah. thx</h2>
    <h4>Hubungi kami</h4></section>
    <div class="sosmed">
            <li> <img src="image/logoinst.png" width="50px" style="margin-right: 200px;"><a href="https://www.instagram.com/falzeestore/">
                <label><span><p style="font-size: 20px; margin-right: 80px; margin-top: -55px; color: white;">Instagram</p><span></label>
            </a></li>
            <li> <img src="image/logowa.png" width="40px" style="margin-right: 205px;"><a href="https://wa.me/6285158488620?text=Hallo%20admin%20Falzee%20Store%21">
            <label><span><p style="font-size: 20px; margin-right: 75px; margin-top: -55px; color: white;">What'sApp</p><span></label>
            </a></li>
            <li> <img src="image/logoemail.png" width="40px" style="margin-right: 205px;"><a href="mailto:email@domain.com"><p style="font-size: 20px; margin-right: 120px; margin-top: -55px; color: white;">E-Mail</p></a>
    <p style="text-align: center; font-size: 10px; margin-top: 200px; color: grey;">Made by Naufal F</p>
    <p style="text-align: center; font-size: 10px; margin-top: 2px; color: grey;">Desain copyright by XI PPLG 1</p></footer>
</body>
 
</html><?php 
  if (isset($_POST['submit'])) {
    $qry = $conn->query("SELECT * FROM tabel_barang WHERE id='$_POST'[select]'");
    $res = $query->fetch_assoc();?>
    <p>Harga <?= $res[harga] ?></p>
<?php  } ?>