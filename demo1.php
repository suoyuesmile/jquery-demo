<?php
    header("Access-Control-Allow-Origin:*");
    $userDB = ["shaosuo", "suoyue", "good"];
    if(isset($_POST["username"])) {
        if(in_array($_POST["username"], $userDB)) {
            echo "用户已存在";
        } else {
            echo "用户名可以使用";
        }
    }