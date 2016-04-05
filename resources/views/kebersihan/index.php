<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nama Petugas Kebersihan UP</title>
</head>
<body>
	<h2>Daftar Nama Petugas Kebersihan UP</h2>
	<ul>
		<?php if (!empty(daftar)):  ?>
			<?php for ($i=0; $i <count($daftar) ; $i++): ?>
				<li><?php echo $daftar[$i] ?></li>
			<?php endfor ?>
		<?php endif ?>
	</ul>
</body>
</html>