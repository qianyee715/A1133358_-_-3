<?php
session_start();

$tID='dingding';
$tPWD='12345';

$sID='A1133358';
$sPWD='A1133358';

$mID='nuk';
$mPWD='54321';

$uID=$_POST['uName'];
$uPwd=$_POST['uPwd'];

$date=strtotime("+1 day",time());

if($uID==$tID && $uPwd==$tPWD){
    $_SESSION['login']='teacher';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=HWteacher.php");
    
}elseif($uID==$sID && $uPwd==$sPWD){
    $_SESSION['login']='student';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=HWstudent.php");
    
}elseif($uID==$mID && $uPwd==$mPWD){
    $_SESSION['login']='manager';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=HWmanager.php");
    
}else{
    echo "Loging Failed!";
    header("Refresh:3;url=index.php");
}

?>