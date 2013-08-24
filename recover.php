<?php
$page_id = 'recover';
$title   = 'Account Recovery';
ob_start();
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';
?>

<div class="row">
    <div class="span12">
        <div class="well">
            <legend>Recover</legend>

            <?php
                if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
            ?>

                <div class="alert alert-success">Thanks. We have sent you an email with the requested information!</div>

                <?php
                } else {

                $mode_allowed = array('email', 'password');
                if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
                    if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
                        if (email_exists($_POST['email']) === true) {
                            recover($_GET['mode'], $_POST['email']);
                            header('Location: recover.php?success');
                            exit();
                        } else {
                            echo '<div class="alert alert-warning">We couldn\'t find that email address.</div>';
                        }
                    }
                ?>

                <form action="" method="POST">
                    <fieldset>
                        <div class="control-group">
                          <label class="control-label" for="email">Please enter your email address</label>
                          <div class="controls">
                            <input id="email" name="email" type="text" class="input" placeholder="your@email.com"> 
                          </div>
                        </div>
                        <div class="controls">
                            <button id="recover-submit" type="submit" class="btn btn-primary">Recover</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

                <?php
                } else {
                    header('Location: index.php');
                    exit();
                }
            }
            ?>

        </div>
    </div>
</div>

<?php include 'includes/overall/footer.php'; ?>