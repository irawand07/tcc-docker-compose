<table class="table table-striped table-hover">
	<thead bgcolor="#d9edf7">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Jumlah Halaman</th>	
			<th>Aksi</th>		
		</tr>
	</thead>
	<tbody bgcolor="#fff">
	<?php
		include_once "class.php";
		$ambil = new AksesDB();
		
		$hasil=$ambil->ambilData();

		$no = 1;
		while ($row=mysqli_fetch_assoc($hasil)){
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td> ".$row['judul']."</td>";
			echo "<td> ".$row['pengarang']."</td>";
			echo "<td> ".$row['penerbit']."</td>";
			echo "<td> ".$row['jum_halaman']."</td>";
			echo "<td> <a href='form.php?id=".$row['id_buku']."' class='btn btn-info btn-xs'>Ubah</a> 
			   <a href='hapus.php?id=".$row['id_buku']."' class='btn btn-danger btn-xs'>Hapus</a>
			  </td>";
			echo "</tr>";
			$no++;
		}
		?>
	</tbody>
</table>
