<?php
	define('DB_SERVER', 'db');
	define('DB_USER','root');
	define('DB_PASS','dedi');
	define('DB_NAME','buku');
	define('BASE_URL','http://localhost/praktik_pbo/proyek/index.php');

	class AksesDB{
		var $konek;
		function __construct(){
			$this->konek = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) OR die("Gagal Koneksi");
		}

		function ambilData($where=""){
			$query=mysqli_query($this->konek,"select * from buku $where");
			if (!$query)
				die ("Gagal melihat produk".mysqli_error($this->konek));
			return $query;

		}

		function tambahData($judul,$pengarang,$penerbit,$hal){
			$query=mysqli_query($this->konek,"INSERT INTO `buku` (`judul`, `pengarang`, `penerbit`, `jum_halaman`) VALUES ('$judul', '$pengarang', '$penerbit', $hal)");
			if (!$query)
				die ("Gagal Nambah Data".mysqli_error($this->konek));
		}

		function ubahData($id, $judul,$pengarang,$penerbit,$hal){
			$query=mysqli_query($this->konek,"UPDATE buku SET judul = '$judul',pengarang='$pengarang',penerbit='$penerbit',jum_halaman=$hal where id_buku=$id");
			if (!$query)
				die ("Gagal Ubah Data".mysqli_error($this->konek));
		}

		function hapusData($idbuku){
			$query=mysqli_query($this->konek,"Delete From buku where id_buku = $idbuku");
			if (!$query)
				die ("Gagal Hapus Data".mysqli_error($this->konek));
		}
	}
?>
