<?php

	$_SESSION['logou'] = 0;
	session_destroy();
	header('location:index.php');

?>