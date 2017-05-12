<?php 
include_once "wadah/atas.php";
if(isset($_GET['hal'])){
	switch($_GET['hal']){
		case 'beranda': include "beranda.php";break;
		case 'input': include "form.php";break;
		case 'tampil':
			$aksi = $_GET['aksi'];
			if ($aksi== 'hapus'){
				echo '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<b>Data Telah Terhapus</b>
				</div>';
			}
			else if ($aksi== 'ubah'){
				echo '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<b>Data Telah Diubah</b>
				</div>';
			}
			else if ($aksi== 'tambah'){
				echo '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<b>Data Telah Ditambahkan</b>
				</div>';
			}
			include "tabel.php";
			break;
		default : include "beranda.php"; break;
	}
}	
else{
	include "beranda.php";
}
include_once "wadah/bawah.php";
 ?>