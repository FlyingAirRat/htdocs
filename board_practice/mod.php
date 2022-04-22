<?php
    include_once '../db/connect.php';

    $i_board = $_GET['i_board'];
    $sql = "SELECT * FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result)){
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <form action="mod_proc.php" method="post">
    <input type="hidden" name="i_board" value="<?=$i_board?>">
    <p>글번호: <?=$i_board?></p>
        <div><input type="text" name="title" value="<?=$title?>"></div>
        <div>
            <textarea name="ctnt" id="" cols="30" rows="10" value=""><?=$ctnt?></textarea>
        </div>
        <div>
            <input type="submit" value="등록"></input>
            <input type="reset" value="초기화"></input>
        </div>
    </form>
    <a href="list.php"><button>게시글 목록으로</button></a>
</body>
</html>