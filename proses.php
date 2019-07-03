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
	<audio src="seize.mp3" autoplay controls></audio>
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="biodata.html">Biodata</a></li>
			<li><a href="materi.html">Referensi Music</a></li>
			<li><a href="pencarian.html">Pencarian</a></li>
			<li><a href="form.php">Form Pembayaran Tiket</a></li>
			<li><a href="lihat.php">Data Pembeli Tiket</a></li>
			<li><a href="dosen.html">Data Diri Dosen</a></li>
			<li><a href="img/mario.gif" target="_blank">Mario Bros</a></li>
			<li><a href="img/syn.gif" target="_blank">Synyster Gates</a></li>


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

<div class="menu1">
  <ul>
      <li><center><a href="https://tif.uad.ac.id/" target="_self">WEBSITE TIF</a></center></li>
      <li><center><a href="https://www.instagram.com/aldimahendrag/">Profil Saya</a></center></li>
      <img src="img/hmtif.png">
  </ul>
</div>

<div class="menu2">
	<center>
	<div class="jumbotron">

<?php
echo "<head><title>DATA BAYAR</head></title>"; 
//fungsi yang akan mengoutputkan title DATA BAYAR pada head/header
$fp = fopen("datatiket.txt","a+");
//fungsi yang digunakan untuk membuka file, file yg akan dibuka diatas adalah datatiket.txt sebagai variabel dr fp
$nama = $_POST['nama'];
//fungsi pada proses ini adalah dimana ada method post yang berfungsi mengirimkan data atau mengambil data pada database,
//-dan data yang dikirimkan adalah data dari variabel nama
$nama_barang = $_POST['nama_barang'];
//fungsi pada proses ini adalah dimana ada method post yang berfungsi mengirimkan data atau mengambil data pada database,
//-dan data yang dikirimkan adalah data dari variabel nama_barang sebagai nama_barang
$jumlah = $_POST['jumlah'];
//fungsi pada proses ini adalah dimana ada method post yang berfungsi mengirimkan data atau mengambil data pada database,
//-dan data yang dikirimkan adalah data dari variabel jumlah sebagai jumlah
$tipe = $_POST['tipe'];
//fungsi pada proses ini adalah dimana ada method post yang berfungsi mengirimkan data atau mengambil data pada database,
//-dan data yang dikirimkan adalah data dari variabel tipe sebagai tipe
$file = $_FILES["file"]["name"];
//Fungsi ini digunakan untuk mengetahui nama file yang di upload
$tmp_name = $_FILES["file"]["tmp_name"];
//fungsi ini digunakan php untuk memastikan tujuan upload file, yaitu ke komputer kita.
move_uploaded_file($tmp_name, "img/".$file);
//fungsi ini digunakan php untuk mengirimkan file dari komputer kita ke web server.
fputs($fp,"$nama|$nama_barang|$jumlah|$tipe|$file\n");
// merupakan suatu operasi file yang berfungsi untuk menyimpan data bertipe string ke dalam file.
fclose($fp);
//fungsi yang digunakan untuk menutup file, file yg akan dibuka diatas adalah datatiket.txt
echo "<br>";
//fungsi untuk membuat garis baru seperti html pada umumnya
echo " Terimakasih telah membeli ticket konser<br>";
//fungsi untuk mengoutputkan tulisan "Terima Kasih Atas Partisipasi Anda dalam mengisi Form Pembayaran"
echo "<a class=btn href=form.php> Isi Buku Tamu </a><br>";
//fungsi untuk mengoutputkan tulisan "Isi Buku Tamu" dengan tipe seperti hyperlink
//yang bisa diklik untuk menuju halama selanjutnya, jika sesuai dengan kodingan diatas maka kita akan diarahkan ke form.php

echo "<a class=btn href=biodata.html> Lihat Profile </a><br> ";
//fungsi untuk mengoutputkan tulisan "Lihat progile" dengan tipe seperti hyperlink
//yang bisa diklik untuk menuju halama selanjutnya, jika sesuai dengan kodingan diatas maka kita akan diarahkan ke biodata.html
?>
</div>
</div>

<div class="footer">
	<p><center><font face="oswald" color="white" size="4"><marquee direction="right">Copyright || Muhammad Aldi Mahendra Gunadi || 1800018015 || Tugas Akhir Web</marquee></center>
</div>

</body>
</html>