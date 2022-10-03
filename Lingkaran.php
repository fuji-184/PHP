<?php
	//import bentuk2d.php
	require_once 'Bentuk2d.php';
	//class lingkaran
	class Lingkaran extends Bentuk2d {
		//variable
		public $jari2;
		//constructor
		public function __construct($jari2){
			$this->jari2 = $jari2;
		}
		//nama bidang
		public function namaBidang(){
			return "Lingkaran";
		}
		//luas bidang
		public function luasBidang(){
			return 3.14 * $this->jari2 * $this->jari2;
		}
		//keliling bidang
		public function kelilingBidang(){
			return 2 * 3.14 * $this->jari2;
		}
		}
?>