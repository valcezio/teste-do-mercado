<?php
include("config.php");
$item_del= $_GET['del'];
mysql_query("DELETE FROM teste_do_mercado WHERE cd_neg='$item_del'");
echo "<script>
window.location.href = 'http://localhost/index.php';
</script>";
?>