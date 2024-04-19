<?php

session_start();

if (!empty($_POST)) {
	$_SESSION['error'] = array();

	extract($_POST);
	if (!$category) {
		$_SESSION['error']['category']['required'] = "name category is required";
		header("location:../category_add.php");
		exit();
	} else if (!preg_match("/^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$/", $category)) {
		$_SESSION['error']['category']['regex'] = "name category is invalid";
		header("location:../category_add.php");
		exit();
	} else {
		include ("../../includes/connection.php");

		$query = "INSERT INTO `category_table`(`category_name`) VALUES ('$category')";

		$result = mysqli_query($connection_database, $query);

		if (!$result) {
			$_SESSION['error']['category']['dont-add'] = "try again please";
			header("location:../category_add.php");
			exit();
		} else {
			header("location:../category_view.php");
			exit();
		}
	}
} else {
	header("location:../../500.php");
	exit();
}


?>