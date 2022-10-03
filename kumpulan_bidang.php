<!doctype html>
	<html>
	<head>
		<style>
			* { 
			 	box-sizing: border-box;
			 	font-family: Comic Sans MS;
			 	font-size: 16px;
			}
			body {
				display: flex;
				justify-content: center;
				background-color: #16011f;
			}
			table {
				width: 90%;
				border-collapse: collapse;
				color: ghostwhite;
				margin-top: 5%;
			}
			td {
				padding: 20px 30px;
				text-align: left;
			}
			th {
				font-size: 18px;
				padding: 45px 30px;
				text-align: left;
			}
			
			thead {
				background-color: #400a57;
			}
			thead th:first-child {
				border-top-left-radius: 10px;
			}
			thead th:last-child {
				border-top-right-radius: 10px;
			}
			tbody {
				background-color: #530973;
			}
			tbody tr:last-child td:first-child {
				border-bottom-left-radius: 10px;
			}
			tbody tr:last-child td:last-child {
				border-bottom-right-radius: 10px;
			}
			tbody tr:hover {
				background-color: #400a57;
				font-weight: bold;
			}
			.ket {
				display: flex;
			}
			.ket div {
				width: 50%;
			}
		</style>
	</head>
	<body>
		<?php
			//import lingkaran
			require_once 'Lingkaran.php';
			//import persegi panjang;
			require_once 'Persegipanjang.php';
			//immport segitiga
			require_once 'Segitiga.php';
			

			//objek lingkaran
			$lingkaran = new Lingkaran(7);

			//objek persegi panjang
			$persegipanjang = new PersegiPanjang(28,2);

			//objek segitiga
			$segitiga = new Segitiga(6,8,12);

			//array
			$bidang2d = [$lingkaran, $persegipanjang, $segitiga];
			$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang']; 
		?>
		<!-- table -->
		<table>
			<thead>
				<?php
					foreach($judul as $jdl){
				?>
					<th><?= $jdl ?></th>
				<?php } ?>
			</thead>
			<tbody>
				<?php
					$no = 1;
					foreach($bidang2d as $data){
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $data->namaBidang() ?></td>
						<td>
							<?php 
								if($data->namaBidang() == "Lingkaran") echo "
									<div class='ket'>
										<div>Jari-Jari</div>
										<div>: ".$data->jari2."</div>
									</div>";
								else if($data->namaBidang() == "Persegi Panjang") echo "
									<div class='ket'>
										<div>Panjang<br/>Lebar</div>
										<div>: ".$data->panjang."<br/>: ".$data->lebar."</div>
									</div>";
								else if($data->namaBidang() == "Segitiga Siku-Siku") echo "
									<div class='ket'>
										<div>Alas<br/>Tinggi<br/>Sisi Miring</div>
										<div>: ".$data->alas."<br/>: ".$data->tinggi."<br/>: ".$data->sisi_miring."</div>
									</div>";
							?>
						</td>
						<td><?= $data->luasBidang() ?></td>
						<td><?= $data->kelilingBidang() ?></td>
					</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</body>
	</html>