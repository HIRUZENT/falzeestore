<!-- script php mysql untuk menyimpan data (insert data ke database) -->

    <?php
    include 'koneksi.php';
    if (isset($_POST['userid'])) {
        $userid = $_POST['user_id'];
        $serverid = $_POST['server_id'];
        $nominal = $_POST['nominal'];
        $pembayaran = $_POST['pembayaran'];
        $harga = $_POST['harga'];
        $email = $_POST['email_pembeli'];
        //variabel query adalah variabel yang menyimpan perintah sql dml
        $query = mysqli_query($kon, "INSERT INTO tabel_transaksi (id,nama,jenis_kelamin,alamat) VALUES (NULL,'$userid','$serverid','$nominal', '$pembayaran', '$harga', '$email_pembeli' )");
    }
    ?>