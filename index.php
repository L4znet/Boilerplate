<?php
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    } else {
        $p = "home";
    }


    ob_start();
        require 'pages/' . $p . '.php';
    $content = ob_get_clean();
    require 'pages/templates/default.php';    
