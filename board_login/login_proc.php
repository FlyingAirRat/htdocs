<?php
    include_once "./db/db_user.php";
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    $param = [
        "uid" => $uid
    ];
    
    $result = sel_user($param);

    if(empty($result)) {
        echo "아이디 없음";
        die;
    }
    if($upw === $result["upw"]){
        session_start();
        $_SESSION["login_ user"] = $result;
        header("Location: list.php");
    } else{
        header("Location: login.php");
    }
