<?php
$nisnGet = $_GET['nisn'];
$nisnPost = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
$id_spp = $_POST['id_spp'];

include'../koneksi.php';
$sql = "UPDATE siswa SET nisn='$nisnPost', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telpon='$no_telpon', id_spp='$id_spp' WHERE nisn='$nisnGet'";
$query = mysqli_query($koneksi, $sql);
if($query) {
    header("Location:?url=siswa");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=siswa');</script>";
    // var_dump($_POST);
}