<?php
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/board_login/common.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? $nm. "님 환영합니다" : ""?>
            <a href="list.php">리스트</a>
            <a href="write.php">글작성</a>
        </header>
        <main>

        </main>
    </div>
    <?php
    if(isset($_SESSION["login_user"]))
    {
        print "<div><?=$nm?> 님 환영합니다.</div>";
    }?>
</body>
</html>