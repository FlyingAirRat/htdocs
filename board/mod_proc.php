<?php
    include_once "../db/connect.php";
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $i_board = $_POST["i_board"];
    $conn = get_conn();
    print $title;
    print $ctnt;
    print $i_board;
    $sql=
    "UPDATE t_board SET title = '${title}', ctnt = '${ctnt}'
    WHERE i_board = '${i_board}'";
    if($title === "" || $ctnt === ""){
        print "제목이나 내용이 없습니다.";
        die();
    }
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?i_board=$i_board");
?>