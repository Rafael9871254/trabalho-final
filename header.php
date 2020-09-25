<?php
    $hash = $_COOKIE['hash'];
    $login = mysql_query("SELECT * FROM users WHERE hash = '$hash'");
    $row = mysqli_fetch_object($login);
?>
<!-- cabeçalho da tela inical -->

<div class="navbar">
	<img src="img/foto3.jpg" width="3%"><br>
	<a href="index2.php">inicio</a>
	<a href="register.php" class="right">registro</a>
	<a href="logout.php" class="right">Sair</a>
	<a href="regioes.php">regioes</a>
	<a href="preços.php">preços</a>
	<?php
	if (isset($_COOKIE['login'])) {
        echo '<a href="logout.php" class="right">Sair</a>';
		echo '<a href="" class="right">'. $row->nome .'</a>';
	
	}else{
		 echo '<a href="telalogin.php" class="right">Login</a>';
	}
	?>
	
</div>