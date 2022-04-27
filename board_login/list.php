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
            <?php
            include_once "db/db_board.php";
            if(isset($_SESSION["login_user"])){
                print $nm."님 환영합니다.";
                print "<a href='write.php'>글쓰기</a><br>";
                print "<a href='logout.php'>로그아웃</a>";
            } else{
                print "<a href='login.php'>로그인</a>";
            }
            $list = sel_board_list();
            ?>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>글쓴이</th>
                        <th>등록일시</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>">
                            <?=$item["title"]?></a></td>
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["created_at"]?></td>
                        </tr>
                        <?php }; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>