<?php
echo "국가: ",$_COOKIE['country'],"<br>";
$_COOKIE['country'] = "UK";
echo "국가: ",$_COOKIE['country'],"<br>";
unset($_COOKIE['country']);
setcookie("country");
echo "국가: ",$_COOKIE['country'],"<br>";