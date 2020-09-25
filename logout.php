<?php
    unset($_COOKIE['login']);
    setcookie("login","",time() - 3600);
    header("telalogin.php");
    include("telalogin.php");
?>
<!-- pagina feita para o logout -->