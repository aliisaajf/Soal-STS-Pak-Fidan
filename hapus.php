<?php
include "db.php";

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $sql = "DELETE FROM data_guru WHERE nip='$nip'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Guru Dihapus');window.location.href='data_guru.php';</script>";
    } else {
        echo "Error: " . $connect->error;
    }
}
?>