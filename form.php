<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/javafix.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body body background="img/red.jpg">
<div class="header">
	<audio src="seize.mp3" autoplay controls></audio>
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
      <li><center><a href="https://tif.uad.ac.id/" target="_self">WEBSITE TIF</a></center></li>
      <li><center><a href="https://www.instagram.com/aldimahendrag/">Profil Saya</a></center></li>
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
    <br>
    <br>
    <br>

<center>
  <table border="2" style="margin-top: 30px;"color="red">
	<form action="proses.php" method="post" enctype="multipart/form-data">
    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="Submit2" class="btn btn-danger">Reset</button>
    <tr>
  <div class="form-group">
   <td><br> <label for="nama" ><font color="white">Nama Penonton:</font></label></td>
   <td> <input type="text" name="nama" class="form-control" id="nama"></td>
  </div>
</tr>
<tr>
  <div class="form-group">
   <td> <label for="alamat"><font color="white">Nama Band :</font></label></td>
    <td><select name="nama_barang">
    	<option value="Asking Alexandria">Asking Alexandria</option>
    	<option value="Bring Me The Horizon">Bring Me The Horizon</option>
    	<option value="Suicide Silence">Suicide Silence</option>
    	<option value="As Blood Run Black">As Blood Run Black</option>
    
    </select>
</td>
  </div>
</tr>
<tr>
  <div class="form-group">
   <td> <label for="alamat"><font color="white">Jumlah Ticket :</font></label></td>
    <td><input type="text" name="jumlah" class="form-control" id="alamat"></td>
  </div>
</tr>
<div class="form-group">
<td>
    <label for="alamat"><font color="white">Tipe Ticket :</font></label></td>
    <td><select name="tipe">
      <option value="Festival">Festival</option>
      <option value="VIP">VIP</option>
      <option value="VVIP">VVIP</option>
    </select>
    </td>
  </div>
</tr>
<tr>
  <div class="form-group">
    <td><label for="alamat"><font color="white">Bukti Transaksi :</font></label></td>
   <td> <input type="file" name="file"></td>
  </div>
  <br>
</tr>
<br><br>

</form>
   </div>
 </table>
  
</div>
</center>
<div class="footer">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<p><center><font face="oswald" color="white" size="4"><marquee direction="right">Copyright || Muhammad Aldi Mahendra Gunadi || 1800018015 || Tugas Akhir Web</marquee></center>
</div>

</body>
</html>