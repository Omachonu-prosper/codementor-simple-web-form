<?php 
// An issue has been sent by the user
if(isset($_COOKIE['issue'])) {
	// Destroy the cookie
	setcookie('issue', '', time() - 3600, '/');
}

header('location: /');