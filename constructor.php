<?php 


class Produk{
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

		   public function __construct($judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= "harga" ) {
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;
		   }

	public function getLabel() {
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}

}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Drucckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball", "Muhamad Luffi", "XNXX", 20000);

echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";

echo "Kartun :" . $produk3->getLabel();

 