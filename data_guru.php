<?php
    include "db.php";
?>
<style>
    td {
        border : 1px solid pink;
    }
</style>
<a href="tambah_guru.php">Tambah Data Guru</a><br>
<table>
    <thead>
    <tr>
        <td>NIP</td>
        <td>nama_guru</td>
        <td>mata_pelajaran</td>
        <td>jabatan</td>
        <td>alamat</td>
        <td>tanggal_lahir</td>
        <td>no_hp</td>
        <td>email</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
    <?php
        $sql = "SELECT * FROM data_guru ";
        $result = $connect->query($sql);

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row['nip'] ."</td>";
            echo "<td>". $row['nama_guru']."</td>";
            echo "<td>". $row['mata_pelajaran'] ."</td>";
            echo "<td>". $row['jabatan'] ."</td>";
            echo "<td>". $row['alamat'] ."</td>";
            echo "<td>". $row['tanggal_lahir'] ."</td>";
            echo "<td>". $row['no_hp'] ."</td>";
            echo "<td>". $row['email'] ."</td>";
            echo "<td>
                <a href='edit_guru.php?nip=".$row['nip']."'>Edit</a> &nbsp;
                <a href='hapus.php?nip=".$row['nip']."'>Hapus</a></td>";
            echo "</tr>";
        }
    ?>
</tbody>
</table>
