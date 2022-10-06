<!doctype html>
<html>
	<head>
		<link href="myframework.css" rel="stylesheet"/>
	</head>
	<body class="cmc-sms dflex jc-center bg-gradient-3p mtmb-50">
		<?php require "kode.php" ?>
		<div class="dgrid kolom-2 gap w-70">
			<div class="bg-gradient-op p-10 b-rad">
				<?php
					$p1 = new Pegawai (293817889, "Budi", "Manager", "Islam", "Menikah");
					$p1->mencetak();
				?>
			</div>
			<div class="bg-gradient-op p-10 b-rad">
				<?php
					$p2 = new Pegawai (749362738, "Intan", "Asisten Manager", "Islam", "Menikah");
					$p2->mencetak();
				?>
			</div>
			<div class="bg-gradient-op p-10 b-rad">
				<?php
					$p3 = new Pegawai (64973928, "Susi", "Kabag", "Kristen", "Menikah");
					$p3->mencetak();
				?>
			</div>
			<div class="bg-gradient-op p-10 b-rad">
				<?php
					$p4 = new Pegawai (748262839, "Selly", "Staff", "Hindu", "Belum Menikah");
					$p4->mencetak();
				?>
			</div>
			<div class="bg-gradient-op p-10 b-rad">
				<?php
					$p5 = new Pegawai (927384669, "Nana", "Staff", "Islam", "Belum Menikah");
					$p5->mencetak();
				?>
			</div>
		</div>
	</body>
</html>