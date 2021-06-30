<?php 
// require_once 'Produk/infoProduk.php';    
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';


// menghandle Class dengan nama yang sama dengan namespace

spl_autoload_register(function($class){
    //diexplode untuk ngambil nama file user yg diakhir, 
    // klo tidak diexplode out pathnya gini App\produk\User.php sesuai nama namespace;
    // kita cuma perlu usernya saja

    $class = explode("\\", $class);
    $class = end($class);

    require_once __DIR__.'/Produk/'.$class.'.php';
});

spl_autoload_register(function($class){
    $class = explode("\\", $class);
    $class = end($class);
    
    require_once __DIR__.'/Service/'.$class.'.php';
});