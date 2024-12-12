<?php
	include 'header.php';

	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$table = 'user';
		$field = array('id_user','username','password','level');
		$value = array("null","'$username'","'$password'","'user'");
		register($table,$field,$value);

	}
?>
<div class="register">
	<div class="register-header">
		
	</div>
	<form action="" method="POST">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<button class="btn btn-register" name="register">Daftar</button>
	</form>
	<div class="register-footer">
		<small>Anda sudah punya akun? <a href="login.php">Login</a></small>
	</div>

</div>

<?php
	include 'footer.php';
?>