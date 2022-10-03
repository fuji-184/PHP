<?php
	//import bentuk2d.php
	require_once 'Bentuk2d.php';
	//class segitiga
	class Segitiga extends Bentuk2d {
		//variable
		public $alas;
		public $tinggi;
		public $sisi_miring;
		//constructor
		public function __construct($alas, $tinggi, $sisi_miring){
			$this->alas = $alas;
			$this->tinggi = $tinggi;
			$this->sisi_miring = $sisi_miring;
		}
		//nama bidang
		public function namaBidang(){
			return "Segitiga Siku-Siku";
		}
		//luas bidang
		public function luasBidang(){
			return 0.5 * $this->alas * $this->tinggi;
		}
		//keliling bidang
		public function kelilingBidang(){
			return $this->alas + $this->tinggi + $this->sisi_miring;
		}
		}
?>