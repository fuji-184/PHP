<!doctype html>
	<html>
	<head>
		<link href="css.css" rel="stylesheet"/>
	</head>
	<body>
		<?php
			//array scalar
			$m1 = ['nim'=>'10000','nama'=>'Budi','nilai'=>80];
			$m2 = ['nim'=>'10001','nama'=>'Doni','nilai'=>85];
			$m3 = ['nim'=>'10002','nama'=>'Erna','nilai'=>70];
			$m4 = ['nim'=>'10003','nama'=>'Fina','nilai'=>75];
			$m5 = ['nim'=>'10004','nama'=>'Geri','nilai'=>50];
			$m6 = ['nim'=>'10005','nama'=>'Heni','nilai'=>40];
			$m7 = ['nim'=>'10006','nama'=>'Intan','nilai'=>90];
			$m8 = ['nim'=>'10007','nama'=>'Linda','nilai'=>80];
			$m9 = ['nim'=>'10008','nama'=>'Nana','nilai'=>78];
			$m10 = ['nim'=>'10009','nama'=>'Sinta','nilai'=>85];
			//array assosiative
			$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
			//array judul
			$head = [
                        	'No',
                        	'NIM',
                        	'Nama',
                        	'Nilai',
                        	'Keterangan',
                        	'Grade',
                        	'Predikat'
                        ];
		?>
		<table class="table-1">
			<thead>
				<tr>
					<?php
						foreach($head as $hd){
					?>
					<th><?= $hd ?></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
					foreach($mahasiswa as $mhs){
						//array judul
						$judul = [$no, $mhs['nim'], $mhs['nama'], $mhs['nilai']];
						//keterangan
                        $judul[4] = ($mhs['nilai'] >= 60)? "Lulus" : "Tidak Lulus";
                        //grade
                        if($mhs['nilai'] >= 80 && $mhs['nilai'] <= 100){
                            $judul[5] = 'A';
                        }
                        else if($mhs['nilai'] >= 70 && $mhs['nilai'] < 80){
                            $judul[5] = 'B';
                        }
                        else if($mhs['nilai'] >= 60 && $mhs['nilai'] < 70){
                            $judul[5] = 'C';
                        }
                        else if($mhs['nilai'] >= 50 && $mhs['nilai'] < 60){
                            $judul[5] = 'D';
                        }
                        else if($mhs['nilai'] >= 40 && $mhs['nilai'] < 50){
                            $judul[5] = 'E';
                        }
                        //predikat
                        switch($judul[5]){
                            case 'A':
                                $judul[6] = "Memuaskan";
                                break;
                            case 'B';
                                $judul[6] = "Baik";
                                break;
                            case 'C':
                                $judul[6] = "Cukup";
                                break;
                            case 'D':
                                $judul[6] = "Kurang";
                                break;
                            case 'E';
                                $judul[6] = "Buruk";
                                break;
                        }
                        //cetak
                        echo "<tr>";
                        foreach ($judul as $jdl) {
                              
                ?>
                    <td><?= $jdl ?></td>
               <?php }echo "</tr>";$no++; } ?>
            </tbody>
            <tfoot>
				<?php
					$nilai = array_column($mahasiswa, 'nilai');
					$jumlah_nilai = array_sum($nilai);
					$jumlah_siswa = count($mahasiswa);
					$tfoot = [
						'Nilai Tertinggi'=>max($nilai),
						'Nilai Terendah'=>min($nilai),
						'Rata-rata'=>$jumlah_nilai / $jumlah_siswa,
						'Jumlah Siswa'=>$jumlah_siswa
					];
					//cetak
					foreach ($tfoot as $jdul => $info) {
				?>
				<tr>
					<th colspan="6"><?= $jdul ?></th>
					<th><?= $info ?></th>
				</tr>
			<?php } ?>
			</tfoot>
		</table>
	</body>
	</html>