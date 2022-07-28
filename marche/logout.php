<?php ob_start(); 
	header('Location: index.php');
	
	if(!isset($_SESSION)){
		session_start();
	}

	if(!empty($_SESSION['NAME'])){
		$_SESSION['NAME'] = NULL;
	}
	if(!empty($_SESSION['EMAIL'])){
		$_SESSION['EMAIL'] = NULL;
	}
	if(!empty($_SESSION['ID'])){
		$_SESSION['ID'] = NULL;
	}
	if(!empty($_SESSION['CART'])){
		$_SESSION['CART'] = NULL;
	}
	if(!empty($_SESSION['SM_COUNT'])){
		$_SESSION['SM_COUNT'] = NULL;
	}
?>