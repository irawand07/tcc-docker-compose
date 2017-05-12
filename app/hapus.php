<?php
	include_once "wadah/atas.php";
	include "class.php";
	$id = $_GET['id'];
	$ambil = new AksesDB ();
	$hasil=$ambil->ambilData("where id_buku=$id");
	$row=mysqli_fetch_assoc($hasil);

	if (isset($_GET['hapus'])){
		$hapus = new AksesDB();
		$hapus -> hapusData($id);
		echo "<script>window.location.replace('".BASE_URL."?hal=tampil&aksi=hapus')</script>";
	}
	else{
?>
	<div style="margin-top: 130px height:80px;">
		<h3 align="center">Apakah Anda Yakin akan menghapus buku <b><i><?php echo $row['judul'];?>?</i></b></h3>
		<br/>
		<p align="center"><a href="hapus.php?id=<?php echo $id ?>&hapus=ok" class="btn btn-primary" name="simpan"align="center"> Hapus </a>&nbsp; &nbsp; 
		<a href="index.php" class="btn btn-danger" align="center"> Batal</a>
		</p>
		</h3>
	</div>

<?php
	}
	include_once "wadah/bawah.php";
?>