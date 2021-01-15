<?php
	$server		= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "antaran";

	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		# code...
		echo "gagal terhubung mysql:".mysqli_connect_error();
	}
?>