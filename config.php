<?php
$conect = mysql_connect("localhost","root","pass") or dir (mysql_error());
$banco = mysql_select_db("negociacao") or die (mysql_error());
?>
