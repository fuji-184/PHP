<?php
			//class pegawai
			class Pegawai {
				//varible
				public $nip;
				public $nama;
				public $jabatan;
				public $agama;
				public $status;
				//constructor
				public function __construct($nip, $nama, $jabatan, $agama, $status){
					$this->nip = $nip;
					$this->nama = $nama;
					$this->jabatan = $jabatan;
					$this->agama = $agama;
					$this->status = $status;
				}
				//gaji pokok
				public function setGajiPokok(){
					switch ($this->jabatan) {
						case "Manager":
							return 15000000;
							break;
						case "Asisten Manager":
							return 10000000;
							break;
						case "Kabag":
							return 7000000;
							break;
						case "Staff":
							return 4000000;
							break;
					}
				}
				//tunjangan jabatan
				public function setTunjab(){
					return 20/100 * $this->setGajiPokok();
				}
				//tunjangan keluarga
				public function setTunkel(){
					return $this->status == "Menikah" ? 10/100 * $this->setGajiPokok() : 0;
				}
				//zakat profesi
				public function setZakatProfesi(){
					if($this->agama == "Islam" && $this->setGajiPokok()*$this->setTunjab()*$this->setTunkel() >= 6000000){
						return 2.5/100 * $this->setGajiPokok();
					}
				}
				//cetak
				public function mencetak(){
					echo "
						<div class='dflex jc-spc-around w-100'>
					<div class='w-40'>
						<h5>NIP</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>".$this->nip."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Nama</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>".$this->nama."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Jabatan</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>".$this->jabatan."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Agama</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>".$this->agama."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Status</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>".$this->status."</div>
				</div><br/>

				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Gaji Pokok</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>Rp. ".number_format($this->setGajiPokok(),2,',','.')."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Tunjangan Jabatan</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>Rp. ".number_format($this->setTunjab(),2,',','.')."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Tunjangan Keluarga</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>Rp. ".number_format($this->setTunkel(),2,',','.')."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Zakat Profesi</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>Rp. ".number_format($this->setZakatProfesi(),2,',','.')."</div>
				</div>
				<div class='dflex jc-spc-around'>
					<div class='w-40'>
						<h5>Total Gaji</h5>
					</div>
					<div class='w-10'>:</div>
					<div class='w-50'>Rp. ".number_format($this->setGajiPokok()+$this->setTunjab()+$this->setTunkel()+$this->setZakatProfesi(),2,',','.')."</div>
				</div>"
				
					;
				}
			}
			
		?>