<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"id8194880_crud1",
				"12345678",
				"id8194880_crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
