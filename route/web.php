<?php

$page = isset($_GET['page'])
    ? $_GET['page']
    : "home";

switch($page){

    case "home":
        include "page/home.php";
        break;

    case "karakter":
        include "page/kategori/karakter.php";
        break;

    case "fashion":
        include "page/kategori/fashion.php";
        break;

    case "hewan":
        include "page/kategori/hewan.php";
        break;

    default:
        echo "
            <div class='container mt-5'>
                <h1>404 Page Not Found</h1>
            </div>
        ";
        break;
}
?>