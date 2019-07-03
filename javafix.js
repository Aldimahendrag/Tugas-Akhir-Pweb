function cari() {
	var kata = document.formcari.keyword.value;
	var hasil = "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')
}
//Pada fungsi javascript ini, fungsinya sama seperti pencarian di google pada umumnya,
//-dengan proses diawali dari pengguna memasukkan variabel yang diinginkan pada kolom, setelah itu
//-pengguna yang memasukan inputan berupa variabel akan langsung terhubung ke google, 
//-karena didalam variabel hasil ada link untuk terhubung ke google, link tersebut masih bisa diganti
//-dengan link pencarian yang lain seperti yahoo,ucsearch dll.

function button1(){
	var hasil = "https://www.petanikode.com/";
	window.open(hasil, 'petanikode', config='height=500, width=750, scrollbars=yes location=yes')
}

//pada fungsi button1,fungsi hampir sama dengan fungsi sebelumnya. perbedaan terletak
//-disaat kita membuka halaman lalu akan muncul tab baru dan langsung terhubung ke
//-website yang dituju, kalau yang saya cantumkan langsung akan menuju ke petanikode.

function tampilTanggal(){
	document.getElementById('demo').innerHTML=Date()

}
//pada fungsi tampilTanggal1 (Date) ini, terdapat variabel innerHTML=Date, yang berfungsi
//-untuk menampilkan tanggal yang akan dipasang di web html pengguna sesuai dengan tanggal
//- yang sudah diatur didalam pc pengguna.

function sayHello(){
    console.log("Hello World!");
}
//-fungsi ini merupakan fungsi dasar dari javascript karena proses nya sangat simple,
//dan hanya keluar output "Hello World".

function waktu() {
		var waktu = new Date();
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
//fungsi waktu, fungsi diatas berfungsi untuk mengoutputkan waktu dalam jam,menit dan detik
//- pada proyek saya fungsi ini diproses di dalam file pencarian.html, kegunaan fungsi ini adalah
//- sebagai penunjuk waktu saja.

window.alert("Hai, klik Ok untuk melanjutkan");
//pada fungsi ini sengaja tidak saya buat didalam file ini, tapi saya taruh di bagian index
//-proses yang terjadi adalah sebagai notifikasi awal yang jika masuk index, maka akan
//- keluar notifikasi bertombol "ok",untuk melanjutkan pengguna diwajibkan klik tombol itu
//- lalu akan berlanjut ke halaman yang dituju (index)