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
    <?php
    $title = 'Strona w budowie';
    include_once('../../includes/html-head.php') ?>
</head>
<body>
<?php
$inProgress = true;
include_once('../../includes/menu-header.php')
?>
<div class="wrapper">
    <div id="banner" class="container"></div>
    <div id="welcome" class="container">

        <div class="title">
            <h2>Rejestracja powiodła się!</h2>
        </div>
        <p>Możesz powrócić do <a href="login.php">strony logowania</a>, aby kontynuować użytkowanie strony.</p>
    </div>
</div>
<?php include_once('../../includes/footer.php') ?>

</body>
</html>

<h1>Registration successful!</h1>

<p>You can now go back to the <a href="../../index.php">login page</a> and log in</p>