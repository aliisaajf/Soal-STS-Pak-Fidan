<?php
include("db.php");

if (isset($_POST['simpan'])) {
    $nip            = $_POST['nip'];
    $nama_guru      = $_POST['nama_guru'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $jabatan        = $_POST['jabatan'];
    $alamat         = $_POST['alamat'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $no_hp          = $_POST['no_hp'];
    $email          = $_POST['email'];

    $sql = "UPDATE data_guru
            SET nama_guru='$nama_guru', mata_pelajaran='$mata_pelajaran', jabatan='$jabatan', alamat='$alamat', tanggal_lahir='$tanggal_lahir', no_hp='$no_hp', email='$email'
            WHERE nip='$nip'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Produk berhasil diupdate');window.location.href='data_guru.php';</script>";
    } else {
        echo "<script>alert('Gagal update: " . $connect->error . "');history.back();</script>";
    }
}
?>