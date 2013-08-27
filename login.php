<?php 
$page_id = 'login';
$title   = 'Please Sign In';
include 'core/init.php';
logged_in_redirect();


    if (empty($_POST) === false) {
      $email    = $_POST['email'];
      $password = $_POST['password'];

      if (empty($email) === true || empty($password) === true) {
        $errors[] = 'Please enter a username and password.';
      } else if (email_exists($email) === false) {
        $errors[] = 'That email address doesnt exist. Have you registered?';
      } else if (user_active($email) === false) {
        $errors[] = 'You haven\'t activated your account. Please check your email for instructions!';
      } else {

        if (strlen($password) > 32) {
          $errors[] = 'The password you have entered is too long.';
        }

        $login = login($email, $password);
        if ($login === false) {
          $errors[] = 'The email/password combination is incorrect!';
        } else {
          $_SESSION['user_id'] = $login;
          header('Location: index.php');
          exit();
        }
      }
    }
include 'includes/overall/header.php'; 
?>

<div class="row-fluid">
  <div class="span12">


    <div class="card">
    <form method="POST" action="login.php" class="form-horizontal">
      <fielset>
      <h3 class="card-heading simple">Sign In</h3>

          <?php echo output_errors($errors); ?>
          <div class="card-body">
            <div class="control-group">
              <label class="control-label" for="email">Email Address</label>
              <div class="controls">
                <input id="email" name="email" type="text" class="input" placeholder="your@email.com"> 
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input id="password" name="password" type="password" class="input" placeholder="Password"> 
              </div>
            </div>

            <div class="controls">
              <button id="login-submit" type="submit" class="btn btn-primary">Sign In</button>
              <button type="reset" class="btn">Cancel</button>
            </div><p>
          </fieldset>
    </form>
  </div>
          <div class="controls">
              <!-- <a href="recover.php?mode=email">Forgot Email </a>&middot; -->
              <a href="recover.php?mode=password">Forgot Password</a>
            </div>

    </div><!-- /.card -->
  </div><!-- /.span -->
</div><!-- /.row -->

<?php include 'includes/overall/footer.php'; ?>