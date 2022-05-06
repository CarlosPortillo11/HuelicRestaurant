<?php
 $orderNameCon = $_GET['orderName'];
 $orderPriceCon = $_GET['orderPrice'];
 $orderImgCon = $_GET['orderImg'];

 echo "Ordenó ".$orderNameCon.", con un precio de $".$orderPriceCon.".";
 echo "<img class=\"foodImage w-1/12\" src=\"resources/images/MenuImgs/$orderImgCon.jpg\" alt=\"$orderNameCon\">";
?>
<html>
    
</html>