<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil</title>
</head>

<body>
  <h1>Data Registrasi</h1>
  <table border="1">
    <!-- NISN -->
    <tr>
      <td>NISN</td>
      <td><?php echo $_POST['nisn']; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?php echo $_POST['nama']; ?></td>
    </tr>
    <!-- Jenis Kelamin -->
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $_POST['jenkel']; ?></td>
    </tr>
    <!-- Kelas -->
    <tr>
      <td>Kelas</td>
      <td><?php echo $_POST['kelas']; ?></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td><?php echo $_POST['jurusan']; ?></td>
    </tr>
    <tr>
      <td>Daftar Buku Dipinjam</td>
      <td><?php echo $_POST['dipinjam']; ?></td>
    </tr>
    <tr>
      <td>Tanggal Peminjaman</td>
      <td><?php echo $_POST['peminjaman']; ?></td>
    </tr>
    <tr>
      <td>Tanggal Pengembalian</td>
      <td><?php echo $_POST['pengembalian']; ?></td>
    </tr>
  </table>
</body>

</html>