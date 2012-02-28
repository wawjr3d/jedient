<?php

	$secure_user = SecureUser::getInstance();

	$public_pages = array("signup.php", "login.php", "index.php");
	
	if (!$secure_user->isLoggedIn() && !in_array(get_script_name(), $public_pages)) {
		$page_request->redirect("login.php");
	}
