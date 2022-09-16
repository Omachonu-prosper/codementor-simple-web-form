<?php 

// An issue has been sent by the user
if(isset($_COOKIE['issue'])) {
  $issue = unserialize($_COOKIE['issue']);
} else {
  header('location: /');
}

?>

<?php include_once('../templates/header.php'); ?>

	<div class="p-3">
    <div class="container mt-5 mx-auto card" style="max-width: 40rem;">
      <div class="card-body">
        <h2 class="display-4">Form submission review</h2>

        <hr>

        <h5 class="card-title">Hello <?php echo $issue['username']; ?></h5>
        <p class="card-subtitle mb-2 text-muted">
          This page lets you review your issue before submission. A response will be sent to you at this email "<?php echo $issue['email']; ?>". Click edit if you want to change anything.
        </p>
        <p class="card-text">
          <span class="card-subtitle text-muted">This is your comment: </span>
          <?php echo $issue['comment']; ?> 
          <div class="badge badge-pill badge-primary">Issue Type: <?php echo $issue['issue_type']; ?></div>
        </p>
        <h6 class="card-subtitle mb-2 text-muted">
          Best Regards Omachonu Prosper - Creator
        </h6>
        <a href="/?edit_previous=true" class="card-link btn btn-primary">Edit</a>
        <a href="/scripts/delete.php" name="cancel_edit" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

<?php include_once('../templates/footer.php'); ?>