<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM simpanan_anggota WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<form method="POST" action="">
<div>
	<table>
		<thead>
			<tr>
				<th>EDIT DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>id</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['id'] ?>" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['nama'] ?>" name="nama"></td>
			</tr>
			<tr>
				<td>alamat</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['alamat'] ?>" name="alamat"></td>
			</tr>
			<tr>
				<td>jenis_kelamin</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['jenis_kelamin'] ?>" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td>agama</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['agama'] ?>" name="agama"></td>
			</tr>
			<tr>
				<td>simpanan</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['simpanan'] ?>" name="simpanan"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$pesan = $_POST['pesan'];
		$SQL = "UPDATE tb_bukutamu SET nama = '$nama',email='$email',website='$website',pesan='$pesan' WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>