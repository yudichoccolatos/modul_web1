<html>
<head>
    <title>HITUNG RUMUS</title>
</head>
<body>
HASIL HITUNG RUMUS
<br>
<?php
$a =$_POST['a'];
$b =$_POST['b'];
$rumus=$_POST['rumus'];

if($a==0 and $b==0)  
        {$c="Nilai Belum Dimasukan ... Isi dulu..!";}

elseif($rumus==1)
{ $c= 1/2*($a*$b); 
  $oper="Segitiga"; }

else               
{ $c=$a*$b; 
  $oper="Persegi Panjang"; } 
echo "<br>";
echo "Nilai a adalah            = $a <br>";
echo "Nilai b adalah            = $b <br>";
echo "Rumus Yang Dipilih adalah = $oper <br>";
echo "Hasil Perhitungan Rumus   = $c <br>";
?>
</body>
</html>

