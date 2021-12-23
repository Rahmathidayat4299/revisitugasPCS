<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div style="width: 800px;">
	<table style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">NO</th>
			<th align="left">Nama</th>
			<th align="left">alamat</th>
			<th align="left">jenis_kelamin</th>
			<th align="left">agama</th>
			<th align="left">simpanan</th>
			<th >AKSI</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT * FROM simpanan_anggota";
			$data=mysqli_query($MySQli,$SQL);

			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['nama'] ?></a></td>
			<td><?= $d['alamat'] ?></td>
			<td><?= $d['jenis_kelamin'] ?></td>
			<td><?= $d['agama'] ?></td>
			<td><?= $d['simpanan'] ?></td>
			<td align="center"> <button><a  href="?page=edit&id=<?= $d['id'] ?>">Edit</a></button> OR <button><a class="hapus" href="?page=hapus&id=<?= $d['id'] ?>">Hapus</a></button></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>
</body>
</html>
