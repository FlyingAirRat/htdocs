<?php
    include_once "db/db_board.php";
    session_start();
    $login_user = $_SESSION["login_user"];
    $item = sel_board($param);
    $param = $_GET["i_board"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="list.php">리스트로</a></div>
    <?php
    if($item["i_user"] === $login_user["i_user"]){
        print "<a href='mod.php'><button>수정</button>";
        print "<a href='del.php'><button>삭제</button>";
    }
    ?>
    <div>
        <div>제목 : <?=$result["title"]?></div>
        <div>글쓴이 : <?=$result["nm"]?></div>
        <div>등록일시 : <?=$result["created_at"]?></div>
        <div>내용 : <?=$result["ctnt"]?></div>
    </div>
</body>
</html>