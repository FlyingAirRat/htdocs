<?php
    include "../db/connect.php";
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    print "title: $title<br>";
    print "ctnt : $ctnt";

    $conn = get_conn();
    $sql=
    "INSERT INTO t_board(title,ctnt)
    VALUES('${title}', '${ctnt}')
    ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    if(!$result){
        print "에러 발생!";
        die();
    };
    header("Location: list.php");
?>