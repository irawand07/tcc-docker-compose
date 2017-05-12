
	function validasi(){
		var judul = tambah.judul.value;
		var pengarang = tambah.pengarang.value;
		var penerbit = tambah.penerbit.value;
		var jum_halaman = tambah.jum_halaman.value;
		var validasi="ok";
		
		if (judul=="" || judul==null){
			document.getElementById('judul').innerHTML=' (Tidak Boleh Kosong)';
			document.getElementById('judul').className="alert-danger";
			validasi="gagal";
		}else{
			document.getElementById('judul').innerHTML=' <b>(Ok)</b>';
			document.getElementById('judul').className="alert-info";
		}
		if (pengarang=="" || pengarang==null){
			document.getElementById('pengarang').innerHTML=' (Tidak Boleh Kosong)';
			document.getElementById('pengarang').className="alert-danger";
			validasi="gagal";
		}else{
			document.getElementById('pengarang').innerHTML=' <b>(Ok)</b>';
			document.getElementById('pengarang').className="alert-info";
		}
		if (penerbit=="" || penerbit==null){
			document.getElementById('penerbit').innerHTML=' (Tidak Boleh Kosong)';
			document.getElementById('penerbit').className="alert-danger";
			validasi="gagal";
		}else{
			document.getElementById('penerbit').innerHTML=' <b>(Ok)</b>';
			document.getElementById('penerbit').className="alert-info";
		}
		if (jum_halaman=="" || jum_halaman==null || jum_halaman <= 0){
			document.getElementById('jum_halaman').innerHTML=' (Tidak Boleh Kosong / <= 0)';
			document.getElementById('jum_halaman').className="alert-danger";
			validasi="gagal";
		}else{
			document.getElementById('jum_halaman').innerHTML=' <b>(Ok)</b>';
			document.getElementById('jum_halaman').className="alert-info";
		}

		if (validasi == "gagal")
			return false;
	}