<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, "3306");
    $sql = "INSERT INTO t_board(title, ctnt)
    VALUE('test', 'content')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>