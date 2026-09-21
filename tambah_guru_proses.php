<?php
    include("db.php");

    if(isset($_POST['tambah'])){
        $nip = $_POST['nip'];
        $nama_guru = $_POST['nama_guru'];
        $mata_pelajaran = $_POST['mata_pelajaran'];
        $jabatan = $_POST['jabatan'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        $sql = "INSERT INTO data_guru (nip, nama_guru, mata_pelajaran, jabatan, alamat, tanggal_lahir, no_hp, email)
        VALUES ('$nip', '$nama_guru', '$mata_pelajaran', '$jabatan', '$alamat', '$tanggal_lahir', '$no_hp', '$email')";


        if ($connect->query($sql) === TRUE) {
            echo "<script>alert('Tambah Data Guru Berhasil'); window.location.href='data_guru.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambah Data Guru')</script>";
            echo "<script>window.location.href='tambah_guru.php';</script>";
        }
    }
?>