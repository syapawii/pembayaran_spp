<?php
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
$id_spp = $_POST['id_spp'];

include'../koneksi.php';
$sql = "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telpon,id_spp) VALUES ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telpon','$id_spp')";
$query = mysqli_query($koneksi, $sql);
if($query) {
    header("Location:?url=siswa");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=siswa');</script>";
}
?>