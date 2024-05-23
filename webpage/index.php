<?php

require "./functions.php";
require "./databse.php";
// require "./router.php";
$config =require "config.php";





// $routes =[

//     '/'=>'controllers/index.php',
//     '/about'=> 'controllers/contact.php',
//     '/contact' =>'controllers/about.php'
// ];

// if (array_key_exists($uri ,$routes))
// {
// require $routes[$uri];
// }


$db =new database($config['database']);
$posts =$db->query('Select * from posts where id =1')->fetchAll();
dd($posts);


