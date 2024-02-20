<?php
$halaman= $_GET['page'];
switch($halaman){
    case "home":
        include"index.php";
        break;
    case "profile":
        include"profile.php";
        break;
    default:
        include"contact.php";
        break;
}

echo"<br>";