<?php 

// define('NAMA', 'Muhamad Luffi');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// constanta define tidak bisa di simpan di dalam class sedangkan const bisa di simpan di dalam kelas

// class Coba {
// 	const NAMA = 'Muhamad Luffi';
// }

// echo Coba::NAMA;


// echo __FILE__; 


// function coba(){
// 	return __function__;
// }
// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;