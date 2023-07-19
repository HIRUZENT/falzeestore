<?php
$conn=mysqli_connect("localhost","root","","falzee_store");

function query($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows = [];
    while($row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $conn;
    $nama =htmlspecialchars($data["nama"]);
    $tanggal_lahir=htmlspecialchars($data["tanggal_lahir"]);
    $asal_sekolah=htmlspecialchars($data["asal_sekolah"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $agama = htmlspecialchars($data["agama"]);

    $query = "INSERT INTO form_pendaftaran 
    VALUES
    ('','$nama','$tanggal_lahir','$asal_sekolah','$alamat','$jenis_kelamin', '$agama')
    ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM form_pendaftaran WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>