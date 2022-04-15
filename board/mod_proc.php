<?php
    include "../db/connect.php";
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $conn = get_conn();
    $sql=
    "UPDATE t_board(title,ctnt) SET title = '${title}', ctnt = '${ctnt}'
    WHERE i_board = '${i_board}'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: list.php");
?>