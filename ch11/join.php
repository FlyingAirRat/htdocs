<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>회원가입</h1>
    <a href="login.php">login</a>
    <form action="join.proc.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="text" name="nm" placeholder="이름"></div>
        <div>성별: 
            <label>여자<input type="checkbox" name="gender" value="0"></label>
            <label>여자<input type="checkbox" name="gender" value="0"></label>
        </div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
    </form>
</body>
</html>