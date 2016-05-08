<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <? include_once('includes/html-head.php') ?>
    <script type="text/javascript" src="/js/sha512.js"></script>
    <script type="text/javascript" src="/js/forms.js"></script>
</head>
<body>
<?php
include_once('includes/menu-header.php');
?>
<div class="wrapper">
    <div id="banner" class="container"></div>
    <div id="welcome" class="container">

        <div class="title">
            <h2>Zarejestruj się</h2>
        </div>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <div class=".center-block">
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                  method="post"
                  name="registration_form"
                  id="registration_form">
                <div><label for="username">Login:</label>
                    <input type='text' name='username' id='username'/></div>

                <div><label for="email">Email:</label>
                    <input type="text" name="email" id="email"/></div>

                <div><label for="password">Hasło:</label>
                    <input type="password" name="password" id="password"/></div>

                <div><label for="confirmpwd">Powtórz hasło:</label>
                    <input type="password" name="confirmpwd" id="confirmpwd"/></div>

                <br/>
                <br/>

                <div>
                    <button type="button" class="btn btn-default" value="Register"
                            onclick="return regFormHash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);">Zarejestruj
                    </button>
                </div>
            </form>
        </div>
        <p>Wróc do <a href="index.php">strony logowania</a>.</p>
    </div>
</div>
<?php include_once('includes/footer.php') ?>
</body>
</html>