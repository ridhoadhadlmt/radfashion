<?php
	
	function readCategory($table,$field,$kondisi){
		global $koneksi;

		$sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		return $result;
	}


	function createCategory($table,$field,$value){
		global $koneksi;

		$fieldCategory = implode(",", $field);
		$valueCategory = implode(",", $value);

		$sql = "INSERT INTO ".$table."(".$fieldCategory.") VALUES (".$valueCategory.") ";
		$result = mysqli_query($koneksi,$sql);

		if($result){
			echo "<script>
					Swal.fire({
					  title: 'Berhasil',
					  text: 'Berhasil Tambah Kategori',
					  icon: 'success',
					  type: 'success',
					  confirmButtonText: 'Cool'
					});
					</script>";
			// header('location:index.php?q=kategori');
			echo "<script>alert('Berhasil')</script>";
		}
		else{
			echo $sql;
		}
	}
	function updateCategory($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "UPDATE $table SET $field $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=kategori');
		}
		else{
			echo $sql;
		}
		
	}
	function deleteCategory($table,$kondisi=''){
		global $koneksi;

		$sql = "DELETE FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=kategori');
		}
		else{
			echo $sql;
		}
	}
	function readSubcategory($table,$field,$kondisi){
		global $koneksi;

		$sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		return $result;
	}
	function createSubcategory($table,$field,$value){
		global $koneksi;

		$fieldSubcategory = implode(",", $field);
		$valudSubcategory = implode(",", $value);

		$sql = "INSERT INTO ".$table."(".$fieldSubcategory.") VALUES (".$valudSubcategory.") ";
		$result = mysqli_query($koneksi,$sql);

		if($result){
			// header('location:index.php?q=subkategori');
			echo "<script>alert('Berhasil')</script>";
		}
		else{
			echo $sql;
		}
	}
	function updateSubcategory($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "UPDATE $table SET $field $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=subkategori');
		}
		else{
			echo $sql;
		}
		
	}
	function deleteSubcategory($table,$kondisi=''){
		global $koneksi;

		$sql = "DELETE FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=subkategori');
		}
		else{
			echo $sql;
		}
	}
	function readProduct($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		return $result;
	}
	function createProduct($table,$field,$value){
		global $koneksi;

		$fieldProduct = implode(",", $field);
		$valudProduct = implode(",", $value);

		$sql = "INSERT INTO ".$table."(".$fieldProduct.") VALUES (".$valudProduct.") ";
		$result = mysqli_query($koneksi,$sql);

		if($result){
			// header('location:index.php?q=produk');
			echo "<script>alert('Berhasil')</script>";
		}
		else{
			echo $sql;
		}
	}
	function updateProduct($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "UPDATE $table SET $field $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=produk');
			// echo $sql;
		}
		else{
			echo $sql;
		}
		
	}
	function deleteProduct($table,$kondisi=''){
		global $koneksi;

		$sql = "DELETE FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=produk');
		}
		else{
			echo $sql;
		}
	}
	function readBlog($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		return $result;
	}
	function createBlog($table,$field,$value){
		global $koneksi;

		$fieldProduct = implode(",", $field);
		$valudProduct = implode(",", $value);

		$sql = "INSERT INTO ".$table."(".$fieldProduct.") VALUES (".$valudProduct.") ";
		$result = mysqli_query($koneksi,$sql);

		if($result){
			// header('location:index.php?q=blog');
			echo "<script>alert('Berhasil')</script>";
		}
		else{
			echo $sql;
		}
	}
	function updateBlog($table,$field,$kondisi=''){
		global $koneksi;

		$sql = "UPDATE $table SET $field $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=blog');
			// echo $sql;
		}
		else{
			echo $sql;
		}
		
	}
	function deleteBlog($table,$kondisi=''){
		global $koneksi;

		$sql = "DELETE FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			header('location:index.php?q=blog');
		}
		else{
			echo $sql;
		}
	}
	function login($table,$field,$kondisi =''){
		global $koneksi;

		$sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		$login = mysqli_num_rows($result);
		if($result > 0){
			$data = mysqli_fetch_assoc($result);
			if($data['level'] == 'admin'){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['level'] = 'admin';
				header('location:../admin/');
			}
			else if($data['level'] == 'user'){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['level'] = 'user';
				header('location:index.php');
			}
		}
		else{
			echo $sql;
			// header('location:login.php?error');
		}
	}
	function register($table,$field,$value){
		global $koneksi;

		$fieldUser = implode(",",$field);
		$valueUser = implode(",",$value);

		$sql = "INSERT INTO ".$table."(".$fieldUser.") VALUES (".$valueUser.")";
		$result = mysqli_query($koneksi,$sql);
		if($result){
			echo "<script>alert('Berhasil')</script>";
			// header('location:login.php');
		}
		else{
			echo $sql;
		}
	}
	function search($table,$field,$kondisi){
		global $koneksi;

		echo $sql = "SELECT $field FROM $table $kondisi";
		$result = mysqli_query($koneksi,$sql);
		$row = mysqli_num_rows($result);
		return $result;
	}

?>