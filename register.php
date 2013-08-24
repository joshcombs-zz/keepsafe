<?php
$page_id = 'register';
$title   = 'Register Now';
ob_start();
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';

 if (empty($_POST) === false) {
  $required_fields = array('first_name', 'last_name', 'email', 'password', 'password_again');
  foreach($_POST as $key=>$value) {
    if (empty($value) && in_array($key, $required_fields) === true) {
      $errors[] = 'Fields marked with an * are required.';
      break 1;
    }
  }

  if (empty($errors) === true) {
    if (email_exists($_POST['email']) === true) {
      $errors[] = 'We\'re sorry, the email \'' . $_POST['email'] . '\' is already in use.';
    }
    if (preg_match("/\\s/", $_POST['email']) == true) {
      $errors[] = 'Your email must not contain any spaces.';
    }
    if (strlen($_POST['password']) < 8 ) {
      $errors[] = 'Your password must be at least 8 characters.';
    }
    if ($_POST['password'] !== $_POST['password_again']) {
      $errors[] = 'Your passwords do not match.';
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'A valid email is required.';
    }
    if ($_POST['password'] === $_POST['email']) {
      $errors[] = 'Your password must not be the same as your email.';
    }
  }
}
?>

<div class="row">
  <div class="span12">
  	<div class="well">

  <form method="POST" action="register.php" class="form-horizontal" id="register">
    <fieldset>
    <legend>Register</legend>


          <?php 
        if (isset($_GET['success']) && empty($_GET['success'])) {
          echo '<div class="alert alert-success"><button type="button"class="close" data-dismiss="alert">×</button>You have been registered successfully. However, you must activate your account before you can log in. We
          have sent instructions to your email address.
          </div>
          <a href="login.php" class="btn btn-primary">Log me in</a>';
        } else {
          if (empty($_POST) === false && empty($errors) === true) {
            // register user
            $register_data = array(
              'first_name' => $_POST['first_name'],
              'last_name'  => $_POST['last_name'],
              'email'      => $_POST['email'],
              'password'   => $_POST['password'],
              'email_code' => md5($_POST['email'] + microtime())
              );

            register_user($register_data);
            header('Location: register.php?success');
            exit();

          } else if (empty($errors) === false){
            echo output_errors($errors);
          } 
      ?>

            <div class="control-group">
              <label class="control-label" for="first_name">First Name *</label>
              <div class="controls">
                <input id="first_name" name="first_name" type="text" class="input" placeholder="John"> 
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="last_name">Last Name *</label>
              <div class="controls">
                <input id="last_name" name="last_name" type="text" class="input" placeholder="Doe"> 
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="email">Email *</label>
              <div class="controls">
                <input id="email" name="email" type="text" class="input" placeholder="your@email.com"> 
              </div>
            </div>


            <div class="control-group">
              <label class="control-label" for="password">Password *</label>
              <div class="controls">
                <input id="password" name="password" type="password" class="input" placeholder="Password"> 
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="password_again">Re-Enter Password *</label>
              <div class="controls">
                <input id="password_again" name="password_again" type="password" class="input" placeholder="Confirm Password"> 
              </div>
            </div>

            <div class="controls">
              <button id="register-submit" type="submit" class="btn btn-primary">Register</button>
              <button type="reset" class="btn">Cancel</button>
            </div>
    </fieldset>
  </form>

<?php
}
?>

	</div><!-- /.well -->
  </div><!-- /.span -->
</div><!-- /.row -->


<?php include 'includes/overall/footer.php'; ?>