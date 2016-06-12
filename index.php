<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $title = 'Strona Główna';
    include_once('includes/html-head.php');
    ?>
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
        <p>POMOC W AFAZJI jest pierwszą w Polsce darmową i dostępną dla wszystkich stroną internetową oferującą ćwiczenia wspomagające rehabilitację osób z afazją amnestyczną. Aby w pełni skorzystać z serwisu <a href="/web/actions/register.php">utwórz konto </a>lub <a href="/web/actions/login.php">zaloguj się</a>.
        </p>
    </div>
</div>
<?php include_once('includes/footer.php') ?>
</body>
</html>
