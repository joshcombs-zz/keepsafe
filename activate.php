<?php
ob_start();
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';

if (isset($_GET['email'], $_GET['email_code']) === true) {

    $email      = trim($_GET['email']);
    $email_code = trim($_GET['email_code']);

    if (email_exists($email) === false) {
        $errors[] = 'Oops, something went wrong and we couldn\'t find that email address!';
    } else if (activate($email, $email_code) === false) {
        $errors[] = 'We had problems activating your account.';
    }

} else {
    header('Location: index.php');
    exit();
}
?>

<div class="row">
    <div class="span12">
        <div class="well">

            <?php 
            if (empty($errors) === false) {
                echo output_errors($errors);
            } else {
                echo '<div class="alert alert-success">You have successfully activated your account. You may now sign in.</div><p><a href="login.php" class="btn">Login</a></p>';
            }
            ?>

        </div>
    </div>
</div>

<?php include 'includes/overall/footer.php'; ?>