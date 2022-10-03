<?php
	//import bentuk2d.php
	require_once 'Bentuk2d.php';
	//class persegi panjang
	class PersegiPanjang extends Bentuk2d {
		//variable
		public $panjang;
		public $lebar;
		//constructor
		public function __construct($panjang, $lebar){
			$this->panjang = $panjang;
			$this->lebar = $lebar;
		}
		//nama bidang
		public function namaBidang(){
			return "Persegi Panjang";
		}
		//luas bidang
		public function luasBidang(){
			return $this->panjang * $this->lebar;
		}
		//keliling bidang
		public function kelilingBidang(){
			return (2 * $this->panjang) + (2 * $this->lebar);
		}
		}
?>