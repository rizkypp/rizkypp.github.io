<?php
	include_once 'koneksi.php';

	class usr{}
 	$username = $_POST['username'] ?? '';
 	$password = $_POST['password'] ?? '';
	//$username = "admin";
	//$password = "admin";

	if ((empty($username)) || (empty($password))) {
		# code...
		$response = new usr();
		$response->success = 0;
		$response->message = "kolom tidak boleh kosong";

		die(json_encode($response));
	}

	$query = mysqli_query($con, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
	$row	= mysqli_fetch_array($query);

	if (!empty($row)) {
		# code...
		$response = new usr();
		$response->success = 1;
		$response->message = "selamat datang ".$row["username"];
		$response->id = $row['id_pengguna'];
		$response->username = $row['username'];
		die(json_encode($response));
	}else {
		# code...
		$response = new usr();
		$response->success = 0;
		$response->message = "username atau password salah";
		die(json_encode($response));
	}
	mysqli_close();
?>