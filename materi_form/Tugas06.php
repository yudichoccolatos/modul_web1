<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Registrasi</title>
<style type="text/css">
#form1 table {
	font-size: 18px;
}
</style>
</head>

<body>
<form action="Tugas06Proses.php" method="post">
  <p style="text-align: left; font-weight: bold; font-size: 24px;">Form Registrasi</p>
  <table width="50%" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <td colspan="2" style="font-size: 16px">Isi Data Dibawah ini : </td>
    </tr>
    <tr>
      <td width="10%" style="font-size: 16px">Nama</td>
      <td width="25%" style="font-size: 16px"><label for="textfield"></label>
      <input type="text" name="nama"/></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Alamat</td>
      <td style="font-size: 16px"><label for="textarea"></label>
      <textarea name="alamat" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Tempat Lahir</td>
      <td style="font-size: 16px"><label for="textfield2"></label>
      <input type="text" name="tempat" id="textfield2" /></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Tanggal Lahir</td>
      <td style="font-size: 16px"><label for="textfield3"></label>
      <input type="text" name="tanggal" id="textfield3" /></td>
    </tr>
    <tr>
      <td style="font-size: 16px">Jenis Kelamin</td>
      <td style="font-size: 16px">
      <input type="radio" name="jeniskel" value="Laki-laki">Laki - Laki    
      <input type="radio" name="jeniskel" value="Perempuan"> Perempuan</td>
    </tr>
    <tr>
      <td style="font-size: 16px">Pendidikan</td>
      <td style="font-size: 16px"><label for="select"></label>
        <select name="pendidikan" id="select">
           <option>Pilih</option>
           <option>S2</option>
           <option>S1</option>
           <option>D3</option>
         
      </select></td>
    </tr>
   <tr>
      <td colspan="2" style="font-size: 12px"><input type="submit" name="button" id="button" value="Submit" />
      <input type="reset" name="button2" id="button2" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>