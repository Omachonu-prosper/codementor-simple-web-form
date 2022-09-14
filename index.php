<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Simple web form - Codementor.io</title>
  </head>
  <body>
    
    <div class="p-3">
      <div class="container mt-5 mx-auto card p-5" style="max-width: 40rem;">
        <h1 class="display-4">Simple Web form</h1>

        <form>
          <div class="row mb-4">
            <div class="col-sm-12 col-md-6">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" aria-describedby="emailHelp" minlength="2" required placeholder="Username">
            </div>
            <div class="col-sm-12 col-md-6">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp" required placeholder="Email">
            </div>
          </div>

          <select class="custom-select mb-3" name="issue-type">
            <option>Please select your issue type</option>
            <option value="complaint">Complaint</option>
            <option value="query">Query</option>
            <option value="feedback">Feedback</option>
            <option value="other">Other</option>
          </select>

          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" rows="3" required placeholder="Your comment goes here"></textarea>
          </div>

           <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>