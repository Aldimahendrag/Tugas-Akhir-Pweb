<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/javafix.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="biodata.html">Biodata</a></li>
			<li><a href="materi.html">Referensi Music</a></li>
			<li><a href="pencarian.html">Pencarian</a></li>
			<li><a href="form.php">Pembayaran Tiket</a></li>
			<li><a href="lihat.php">Data Pembeli Tiket</a></li>
			<li><a href="dosen.html">Data Diri Dosen</a></li>
			<li><a href="img/mario.gif" target="_blank">Mario Bros</a></li>
			<li><a href="img/syn.gif" target="_blank">Synyster Gates</a></li>


		</ul>
</div>	

<div class="menu1">
  <ul>
      <li><center><a href="https://tif.uad.ac.id/" target="_self"><font color="black" >WEBSITE TIF</font></a></center></li>
      <li><center><a href="https://www.instagram.com/aldimahendrag/"><font color="black">Profil Saya</font></a></center></li>
      <img src="img/hmtif.png">
  </ul>
</div>

<div class="menu3">
	<ul>
			<li><center><a href="tabel.html" target="_blank">Daftar Teman Dekat</a></center></li>
			<li><center><a href="https://www.youtube.com/">Youtube</a></center></li>
			<li><center><a href="https://www.twitter.com/">Twitter</a></center></li>
			<li><center><a href="https://www.facebook.com/">Facebook</a></center></li>
			<li><center><a href="https://www.instagram.com/">Instagram</a></center></li>
			
	</ul>
</div>

<div class="menu2">
	<center>
	<div class="jumbotron">

<?php
echo "<head><title>DATA Tiket</title></head>";//fungsi yang akan mengoutputkan title DATA BAYAR pada head/header
$fp = fopen("datatiket.txt","r");
//fungsi yang digunakan untuk membuka file, file yg akan dibuka diatas adalah datatiket.txt sebagai variabel dr fp
echo "<table border=0>";
//fungsi yang akan mengoutputkan table dengan border 0
while ($isi = fgets($fp,80))
	//Fungsi fgets() digunakan untuk membaca satu baris dari sebuah file.  dan pada fungsi ini yang akan dibaca adalah variabel isi yang meliputi variabel fp berjumlah 80
{
$pisah = explode("|",$isi);
// Fungsi Explode digunakan untuk memisahkan atau memecah-mecahkan suatu string berdasarkan tanda pemisah yang kita tentukan sebelumnya. pada fungsi diatas yang dipisah adalah pada variabel isi dan dibatasi oleh simbol "|"
echo "<tr><td> Nama Pelanggan</td><td>: $pisah[0]</td></tr>";
// Fungsi ini adalah hasil dari fungsi explode dari variabel isi yang dilambangkan dengan variabel pisah, jika dibaca maka nama pelanggan akan dioutputkan dengan string (pisah) urutan ke 0
echo "<tr><td> Nama Band</td><td>: $pisah[1]</td></tr>";
// Fungsi ini adalah hasil dari fungsi explode dari variabel isi yang dilambangkan dengan variabel pisah, jika dibaca maka nama band akan dioutputkan dengan string (pisah) urutan ke 1
echo "<tr><td>Tipe tiket </td><td>: $pisah[3]</td></tr>";
// Fungsi ini adalah hasil dari fungsi explode dari variabel isi yang dilambangkan dengan variabel pisah, jika dibaca maka tipe tiket akan dioutputkan dengan string (pisah) urutan ke 3
echo "<tr><td>Jumlah </td><td>: $pisah[2]</td></tr>";
// Fungsi ini adalah hasil dari fungsi explode dari variabel isi yang dilambangkan dengan variabel pisah, jika dibaca maka jumlah akan dioutputkan dengan string (pisah) urutan ke 2
echo "<tr><td>Bukti </td><td>: <img src=img/$pisah[2] width=200 height=200 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
// Fungsi ini adalah hasil dari fungsi explode dari variabel isi yang dilambangkan dengan variabel pisah, jika dibaca maka bukti pembelian akan dioutputkan dengan gambar dan string (pisah) urutan ke 2
}
echo "</table>";
//fungsi yang akan mengoutputkan table
echo "<a class=btn href=form.php> Isi Buku tamu </a>";
//fungsi untuk mengoutputkan tulisan "Isi Buku Tamu" dengan tipe seperti hyperlink
//yang bisa diklik untuk menuju halama selanjutnya, jika sesuai dengan kodingan diatas maka kita akan diarahkan ke form.php
echo "<br>";
//fungsi untuk membuat garis baru seperti html pada umumnya
echo "<a class=btn href=biodata.html> Profile </a>";
//fungsi untuk mengoutputkan tulisan "Lihat progile" dengan tipe seperti hyperlink
//yang bisa diklik untuk menuju halama selanjutnya, jika sesuai dengan kodingan diatas maka kita akan diarahkan ke biodata.html
?>

</div>

<div class="footer">
	<br><br><br><br>
	<p><center><font face="oswald" color="black" size="4"><marquee direction="right">Copyright || Muhammad Aldi Mahendra Gunadi || 1800018015 || Tugas Akhir Web</marquee></center>
</div>

</body>
</html>