<?php 
$koneksi=mysqli_connect("localhost","root","","asri");
$sql="SELECT * FROM tabel_mhs m, tbl_prodi p
	WHERE m.id_prodi = p.id_prodi";
$hasil=mysqli_query($koneksi,$sql);
?>