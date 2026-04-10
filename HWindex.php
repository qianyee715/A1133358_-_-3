<?php
if(isset($_COOKIE['uName'])){
    echo $_COOKIE['uName']."歡迎回來!!!";
    echo"<a href='HWcookiedel.php'>刪除Cookie</a>";
}


?>


<form action="HWlogincheck.php" method="POST">

ID:<input type="text" name="uName"><br/>
Password:<input type="password" name="uPwd"></br>
<input type="submit">





</form>