<form action="" method="POST">
<div>
	<table>
		<thead>
			<tr>
				<th>TAMBAH DATA BARU</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>id</td>
			</tr>
			<tr>
				<td><input required type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input required type="text" name="nama"></td>
			</tr>
			<tr>
				<td>alamat</td>
			</tr>
			<tr>
				<td><input required type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>jenis_kelamin</td>
			</tr>
			<tr>
				<td><input required type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td>agama</td>
			</tr>
			<tr>
				<td><input required type="text" name="agama"></td>
			</tr>
			<tr>
				<td>simpanan</td>
			</tr>
			<tr>
				<td><input required type="text" name="simpanan"></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
					<input  type="reset" value="RESET" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];
		$simpanan = $_POST['simpanan'];
		$SQL = "INSERT INTO simpanan_anggota(id,nama,alamat,jenis_kelamin,agama,simpanan) VALUES('$id','$nama','$alamat','$jenis_kelamin','$agama','$simpanan')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>
 </center>