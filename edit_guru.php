<?php
    include("db.php");

    $nip = $_GET['nip'];
    $sql = "SELECT * fROM data_guru WHERE nip='$nip'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
?>
<a href="data_guru.php">Kembali</a><br>

<form action="editpro.php" method="post">
    <label for="nip">NIP :</label>
    <input type="number" name="nip" value="<?php echo $row['nip']; ?>">
    <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>"><br>
    
    <label for="nama_guru">Nama Guru :</label>
    <input type="text" name="nama_guru" value="<?php echo $row['nama_guru']; ?>"><br>

    <label for="mata_pelajaran">Mata Pelajaran :</label>
    <input type="text" name="mata_pelajaran" value="<?php echo $row['mata_pelajaran']; ?>"><br>

    <label for="jabatan">Jabatan :</label>
    <input type="text" name="jabatan" value="<?php echo $row['jabatan']; ?>"><br>

    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>"><br>
s
    <label for="no_hp">No.Hp :</label>
    <input type="number" name="no_hp" value="<?php echo $row['no_hp']; ?>"><br>

    <label for="email">Email :</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>

    <button type="submit" name="simpan">Simpan</button>
</form>