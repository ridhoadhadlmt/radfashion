<?php
	include 'header.php';

	session_start();
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$table = 'user';
		$field = '*';
		$kondisi = "WHERE username = '$username' AND password = '$password'";
		login($table,$field,$kondisi);
		
	}


?>

<div class="login">
	<div class="login-header">
		
	</div>
	<form action="" method="POST">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<button class="btn btn-login" name="login">LOGIN</button>
	</form>
	<div class="login-footer">
		<small>Anda belum punya akun? <a href="register.php">Daftar</a></small>
	</div>

</div>

<?php
	include 'footer.php';
?>
