<?php 

    $page = isset($_GET['page']) ? $_GET['page'] : "hewan";

    if($page == "hewan") {
        include "page/hewan.php";
    }


?> 
