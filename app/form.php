
<?php 
include_once "wadah/atas.php";
include_once "class.php";
	if (isset($_GET['id'])){
		
		$id=$_GET['id'];
		$ambil = new AksesDB ();
		$hasil=$ambil->ambilData("where id_buku=$id");
		$row=mysqli_fetch_assoc($hasil);

		$judul=$row['judul'];
		$pengarang=$row['pengarang'];
		$penerbit=$row['penerbit'];
		$jum_halaman=$row['jum_halaman'];
	}
	else {
		$id=NULL;
		$judul="";
		$pengarang="";
		$penerbit="";
		$jum_halaman="";
	}
?>
<script language="JavaScript" type="text/javascript" src="js/validasiform.js"></script>

<form name="tambah" action="#" method="post" onSubmit="return validasi();">
	<table class="table">
		<thead>
			<tr>
				<th>Masukkan Data Buku</th>
			</tr>
		</thead>
		<tbody >
			<input type="hidden" class="form-control" value="<?php echo $id?>" name="id">
			<?php 
			if (isset($_GET['id'])){
				echo '<input type="hidden" class="form-control" name="edit">';
			}        
			?>
			<tr>
				<td>Judul <span id="judul" class="" ></span></td>
				<td><input type="text" class="form-control" name="judul" value="<?php echo $judul?>"></td>
			</tr>
			<tr>
				<td>Pengarang <span id="pengarang" class="" ></span></td>
				<td><input type="text" class="form-control" name="pengarang" value="<?php echo $pengarang ?>"></td>
			</tr>
			<tr>
				<td>Penerbit <span id="penerbit" class="" ></span></td>
				<td><input type="text" class="form-control" name="penerbit" value="<?php echo $penerbit?>"></td>
			</tr>
			<tr>
				<td>Jum_halaman <span id="jum_halaman" class="" ></span></td>
				<td><input type="number" class="form-control" name="jum_halaman" value="<?php echo $jum_halaman?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Simpan" class="btn btn-primary" name="simpan" > &nbsp; &nbsp; <a href="index.php" class="btn btn-danger"> Batal</a></td>
			</tr>
		</tbody>
	</table>
</form>
<?php 
	if (isset($_POST['simpan'])){
		if (isset($_POST['edit'])){
			$id = $_POST['id'];
			$judul = $_POST['judul'];
			$pengarang = $_POST['pengarang'];
			$penerbit = $_POST['penerbit'];
			$jum = $_POST['jum_halaman'];

			$ubah = new AksesDB();
			$ubah ->  ubahData($id,$judul,$pengarang,$penerbit,$jum);
			echo "<script>window.location.replace('".BASE_URL."?hal=tampil&aksi=ubah')</script>";

		}
		else {
			$judul = $_POST['judul'];
			$pengarang = $_POST['pengarang'];
			$penerbit = $_POST['penerbit'];
			$jum = $_POST['jum_halaman'];

			$tambah = new AksesDB();
			$tambah ->  tambahData($judul,$pengarang,$penerbit,$jum);
			echo "<script>window.location.replace('".BASE_URL."?hal=tampil&aksi=tambah')</script>";
		}	
	} 

	include_once "wadah/bawah.php";
?>