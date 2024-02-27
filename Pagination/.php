<?php
//Header
echo'<h1>Header</h1>';
//Nav
echo '<a href="?page=home">Home</a>';
echo '<a href="?page=about">About</a>';
echo '<a href="?page=contact">Contact</a>';
//MAIN
$page=$_GET['page'];
//Switch home
switch($page){
    case 'home':
        include 'home.php';
    break;
    case 'about':
        include 'about.php';
    break;
    case 'contact':
        include 'contact.php';
    break;
    default:
    echo 'maaf tidak ada halaman';
    break;
}


//Footer
echo'<center><h1>Header</h1></center>';


?>