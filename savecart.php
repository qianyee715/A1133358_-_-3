<?php
session_start();
if (isset($_POST["Item"])) {
    // 拆解商品資訊 (編號, 名稱, 價格)
    $ItemInfo = explode(",", $_POST["Item"]);
    $ID = $ItemInfo[0];
    $Name = $ItemInfo[1];
    $Price = $ItemInfo[2];
    $Quantity = $_POST["Quantity"];

    // 建立陣列 Cookie (儲存時間為 1 小時)
    // 格式：Cart[商品ID][欄位]
    setcookie("Cart[" . $ID . "][ID]", $ID, time() + 3600);
    setcookie("Cart[" . $ID . "][Name]", $Name, time() + 3600);
    setcookie("Cart[" . $ID . "][Price]", $Price, time() + 3600);
    setcookie("Cart[" . $ID . "][Quantity]", $Quantity, time() + 3600);
}

// 轉址到購物車頁面
header("Location: shoppingcart.php");
exit;
?>