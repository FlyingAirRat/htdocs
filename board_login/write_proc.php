<?php
include_once "db/db_board.php";
    session_start();
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
    
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt
    ];
    $result = ins_board($param);
    if($result){
        Header("Location: list.php");
    }
    
    if($title === "" || $ctnt === ""){
        print "제목이나 내용이 없습니다.";
        die();
    }
    
?>