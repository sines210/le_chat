<?php 
require './components/header.php';
require './components/nav.php';


if(isset($_GET['page'])){
    $page = $_GET['page'];}
    
    else{$page = 'home';}

if($page === 'home'){
    require 'views/home.php';}

if($page === 'tchat'){
    require 'views/tchat.php';}

if ($page === 'login') {
    require 'views/login.php';}


require './components/footer.php';


?>
