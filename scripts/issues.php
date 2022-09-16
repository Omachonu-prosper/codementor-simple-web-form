<?php 

// Post request to this route
if(isset($_POST['submit_issue'])) {
	$issue = [
		'id' => time() . rand(100000, 999999),
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'issue_type' => $_POST['issue-type'],
		'comment' => $_POST['comment']
	];

	setcookie('issue', serialize($issue), time() + 3600, '/');

	// Redirect users to the page to review their issue
	header('location: /pages/review.php');
}
else {
	// Redirect the user to the home page
	header('location: /');
}