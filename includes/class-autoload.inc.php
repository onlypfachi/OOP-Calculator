<?php

function myAutoLoader ($className) {
    $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

    if (strpos($url, "includes") !== false) {
        $path = "../classes/";
    }
    else {
        $path = "class/";
    }
    $extention = ".class.php";

    require_once $path . $className . $extention;
}