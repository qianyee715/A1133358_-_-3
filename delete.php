<?php
if (isset($_GET["Id"])) {
    $id = $_GET["Id"];
    setcookie("Cart[" . $id . "][ID]", "", time() - 3600);
    setcookie("Cart[" . $id . "][Name]", "", time() - 3600);
    setcookie("Cart[" . $id . "][Price]", "", time() - 3600);
    setcookie("Cart[" . $id . "][Quantity]", "", time() - 3600);
}

// 刪除後轉址回購物車
header("Refresh:0;url=shoppingcart.php");
?>