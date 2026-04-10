<?php
session_start();

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='manager'){
    echo"<h1>welcome! <FONT COLOR=red>Manager </FONT>Login Success<h1></br>";
    echo"<a href='HWlogout.php'>Logout</a>";
}else{
    echo"<h1>非法進入網頁看不到東西<h1>";
    header("Refresh:3;url=HWindex.php");
}
}else{
    echo"<h1>非法進入網頁看不到東西<h1>";
    header("Refresh:3;url=HWindex.php");
}

?>