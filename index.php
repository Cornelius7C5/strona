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
$title = 'Strona Główna';
include_once('includes/functions.php');
sec_session_start(); // Our custom secure way of starting a PHP session.
include_once('includes/html-head.php') ?>

</head>
<body>
<?php
$index = true;
include_once('includes/menu-header.php');
?>
<div class="wrapper">
    <div id="banner" class="container"></div>
    <div id="welcome" class="container">

        <div class="title">
            <h2>Witamy na stronie!</h2>
        </div>
        <p>POMOC W AFAZJI jest pierwszą w Polsce darmową i dostępną dla wszystkich stroną internetową oferującą
            ćwiczenia wspomagające rehabilitację osób z afazją amnestyczną. Aby w pełni skorzystać z serwisu utwórz
            konto lub zaloguj się.
        </p>
    </div>
</div>
<?php include_once('includes/footer.php') ?>
</body>
</html>
