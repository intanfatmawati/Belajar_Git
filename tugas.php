<?php
error_reporting(0);

$user = "root";
$pass = "";
$id_mysql = mysql_connect('localhost',$user,$pass);
if(!$id_mysql)
die("DATABASE GAK BISA DIBUKA<br/>");
if(!mysql_select_db('pegawai', $id_mysql))
die("DATABASE tak terpilih<br/>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<?php
$sql = "SELECT b.nip, b.nama, g.gaji, b.foto FROM biodata b, gaji g WHERE g.nip=b.nip;";
$hasil = mysql_query($sql,$id_mysql);
if(!$hasil)die("Permintaan Query gagal<br/>");
?>
<h2>Daftar Pegawai</h2>
<table border="1">
<tr>
<th>No.</th>
<th>NIP</th>
<th>Nama</th>
<th>Gaji</th>
<th>FOTO</th>
</tr>
<?php
$f=0;
while ($data=mysql_fetch_row($hasil)){
$f++;
?>
<tr>
<td>
<?php echo $f; ?>
</td>
<td>
<?php echo $data[0]; ?>
</td>
<td>
<?php echo $data[1]; ?>
</td>
<td>
<?php echo $data[2]; ?>
</td>
<td>
<img height=250px width=200px src=" <?php echo $data[3]; ?>"/>
</td>
</tr> 
<?php
}
?>
</table>
<h4>INFORMASI</h4>
<?php
$sql = "SHOW TABLES;";
$hasil = mysql_query($sql,$id_mysql);
if(!$hasil)die("Permintaan Query gagal<br/>");
?>
Daftar table :
<ul>
<?php
while ($data=mysql_fetch_row($hasil)){
?>
<li>
<?php echo $data[0] ?>
</li>
<?php } ?>
</ul>
<br/>
Tabel biodata :
<ul>
<?php
$sql = "SELECT * FROM biodata;";
$hasil = mysql_query($sql,$id_mysql);
$f=0;
while ($f< mysql_num_fields($hasil)){
$objek = mysql_fetch_field($hasil,$f);
$f++;
?>
<li>
<b><?php echo $objek->name ?></b> lebar: <?php echo $objek->max_length ?>
</li>
<?php
}
?>
</ul>
<br/>
Tabel gaji :
<ul>
<?php
$sql = "SELECT * FROM gaji;";
$hasil = mysql_query($sql,$id_mysql);
$f=0;
while ($f< mysql_num_fields($hasil)){
$objek = mysql_fetch_field($hasil,$f);
$f++;
?>
<li>
<b><?php echo $objek->name ?></b> lebar: <?php echo $objek->max_length ?>
</li>
<?php
}
?>
</ul>
</body>
</html>