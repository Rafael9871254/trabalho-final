<?php
    error_reporting(0);
    $connect = mysql_connect("localhost","root","")OR DIE("falha ao conectar ao servidor");
    $db = mysql_select_db("ah_bordo",$connect) OR DIE("falha ao selecionar a database");  
?>    