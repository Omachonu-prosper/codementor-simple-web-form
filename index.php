<?php 

$username = $email = $comment = $issue_type = '';

if(isset($_REQUEST['edit_previous']) AND $_REQUEST['edit_previous'] == 'true') {
  // An issue is available for editing
  if(isset($_COOKIE['issue'])) {
    $issue = unserialize($_COOKIE['issue']);

    $username = $issue['username'];
    $email = $issue['email'];
    $comment = $issue['comment'];
    $issue_type = $issue['issue_type'];
  } 
}

?>

<?php include_once('templates/header.php'); ?>

    <div class="p-3">
      <div class="container mt-5 mx-auto card p-5" style="max-width: 40rem;">
        <h1 class="display-4">Simple Web Form</h1>

        <form action="scripts/issues.php" class="needs-validation" novalidate method="post">
          <div class="row mb-4">
            <div class="col-sm-12 col-md-6">
              <label for="username">Username</label>
              <input type="text" class="form-control" name=username id="username" minlength="2" maxlength="20" required placeholder="Username" value="<?php echo $username; ?>">
              <div class="invalid-feedback">
                Username must be 2 to 20 characters.
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required placeholder="Email" value="<?php echo $email; ?>">
              <div class="invalid-feedback">
                Email must be valid.
              </div>
            </div>
          </div>

          <label for="issue">Tell us what this message is for</label>
          <select class="custom-select mb-3" name="issue-type" id="issue" required>
            <option <?php if($issue_type == 'complaint') echo 'selected'; ?> value="complaint">Complaint</option>
            <option <?php if($issue_type == 'query') echo 'selected'; ?> value="query">Query</option>
            <option <?php if($issue_type == 'feedback') echo 'selected'; ?> value="feedback">Feedback</option>
            <option <?php if($issue_type == 'other') echo 'selected'; ?> value="other">Other</option>
          </select>

          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" name="comment" id="comment" rows="3" required placeholder="Your comment goes here"><?php echo $comment; ?></textarea>
            <div class="invalid-feedback">
              Comment can not be empty.
            </div>
          </div>

           <button type="submit" name="submit_issue" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

<?php include_once('templates/footer.php'); ?>