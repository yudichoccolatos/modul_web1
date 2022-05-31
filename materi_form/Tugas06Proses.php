<!DOCTYPE html>
<html>
<head>
  <title>Tugas 06</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jeniskel = $_POST['jeniskel'];
$pendidikan = $_POST['pendidikan'];
?>

<p style="text-align: left; font-weight: bold; font-size: 24px;">Data Registrasi</p>
<table border="1">
  <tr>
    <td width="48%" style="font-size: 16px">Nama</td>
      <td width="52%" style="font-size: 16px"><?php echo $nama; ?></td>
  </tr>
  <tr>
      <td style="font-size: 16px">Alamat</td>
      <td style="font-size: 16px"><?php echo $alamat; ?></td>
    </tr>
   <tr>
      <td style="font-size: 16px">Tempat Lahir</td>
      <td style="font-size: 16px"><?php echo $tempat; ?></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Tanggal Lahir</td>
      <td style="font-size: 16px"><?php echo $tanggal; ?></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Jenis Kelamin</td>
      <td style="font-size: 16px"><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Pendidikan</td>
      <td style="font-size: 16px"><?php echo $pendidikan; ?></td>
    </tr>
    </table> 
    <a href="tugas06.php">Back To Home</a>
</body>
</html>