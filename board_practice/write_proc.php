<?php
    include_once "../db/connect.php";
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $conn = get_conn();
    $sql=
    "INSERT INTO t_board(title,ctnt)
    VALUES('${title}', '${ctnt}')
    ";
    if($title === "" || $ctnt === ""){
        print "제목이나 내용이 없습니다.";
        die();
    }
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");
?>