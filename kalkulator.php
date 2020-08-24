<!DOCTYPE html>
<html>
<head>
	<title>KALKULATOR</title>
</head>
<body>

	<?php
	if(isset($_POST['hitung'])){
	$bil1 = $_POST['bilangan1'];
	$bil2 = $_POST['bilangan2'];
	$operasi = $_POST['hitung'];
	switch ($operasi){
		case 'tambah':
		$hasil = $bil1+$bil2;
		break;
		case 'kurang':
		$hasil = $bil1-$bil2;
		break;
		case 'kali':
		$hasil = $bil1*$bil2;
		break;
		case 'bagi':
		$hasil = $bil1*$bil2;
		break;
	}
}
?>
		<form method="post" action="kalkulator.php">
			<table>
				<tr>
					<td>KALKULATOR</td>
				</tr>
				<tr>
					<td><input type="text" name="bilangan1" maxlength="4" value="" placeholder="Masukkan bilangan pertama"></td>
				</tr>
				<tr>
					<td><input type="text" name="bilangan2" maxlength="4" value="" placeholder="Masukkan bilangan kedua"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" id="tambah" name="hitung" value="tambah">
						<!--<label for="tambah">Tambah (+)</label><br>-->

						<input type="submit" id="kali" name="operasi" value="kali">
						<!--<label for="kali">Kali (x)</label>-->
					</td>
											
					<td>
						<input type="submit" id="kurang" name="operasi" value="kurang">
						<!--<label for="kurang">Kurang (-)</label><br>-->

						<input type="submit" id="bagi" name="operasi" value="bagi">
						<!--<label for="bagi">Bagi (/)</label><br>-->
					</td>
				</tr>
				<tr>
					<td><!--<input type="submit" name="hitung" value="=">-->

						<?php 
							if (isset($_POST['hitung'])) { 
						?>
								<input type="text" value="<?php echo $hasil; ?>">
						<?php
						 	} else { 
						?>
								<input type="text" value="0"> 
						<?php } 
						?>

						</td>
				</tr>
			</table>
		</form>
</body>
</html>