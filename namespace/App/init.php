<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function($class){
	// App\Produk\User = ["App", "Produk", "User"] //ini contoh class yang sudah di explode dan menjadi array
	$class = explode('\\', $class); // explode itu akan membuat class jadi array
	$class = end($class);
	require 'produk/' . $class .  '.php';
});

spl_autoload_register(function($class){
	// App\Produk\User = ["App", "Service", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require 'service/' . $class . '.php';
});