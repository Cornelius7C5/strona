<?php
include_once '../../includes/functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.

$log = login_check($mysqli);
if ($log == true) {
    $logged = 'za';
} else {
    $logged = 'wy';
    echo $log;
}

?>
<!DOCTYPE html>
<html>
<head>
    <?php
    $title = 'Logowanie';
    include_once('../../includes/html-head.php') ?>
    <script type="text/javascript" src="/js/sha512.js"></script>
    <script src="../../js/forms.js" type="text/javascript"></script>
</head>
<body>
<?php
include_once('../../includes/menu-header.php');
?>

<div class="wrapper">
    <div id="banner" class="container">
        <? if (isset($_GET['error'])) { ?>
            <div class="bg-danger text-danger">Wystąpił błąd logowania:
                <?
                if (($_GET['error']) == 1) {
                    ?>Błędne hasło.<?
                } else {
                    ?>Brak takiego użytkownika.<?
                }
                ?>
            </div>
        <? } ?>
    </div>
    <div id="welcome" class="container">

        <div class="title">
            <h2>Zaloguj się</h2>
        </div>
        <div class=".center-block">
            <form action="../../includes/process_login.php" method="post" name="login_form" id="login">
                <div><label for="email">Email: </label> <input type="text" name="email" id="email"/></div>

                <div><label for="password">Hasło: </label><input type="password" name="password" id="password"/>
                </div>
                <br>

                <div>
                    <button class="btn btn-default" value="Login" onclick="formhash(this.form, this.form.password);">
                        Zaloguj
                    </button>
                </div>
            </form>
            <br>

            <?php if (login_check($mysqli) == true) { ?>
                <p>Akualnie zalogowany jako <?php echo htmlentities($_SESSION['username']) ?>.</p>

                <p>Chcesz zmienić użytkownika? <a href="logout.php">Wyloguj</a>.</p>
            <?php } else { ?>
                <p>Aktualnie <?php echo $logged ?>logowany.</p>
                <p>Jeśli jeszcze nie masz konta <a href='register.php'>zarejestruj się</a></p>
            <?php } ?></div>
    </div>
</div>
<?php include_once('../../includes/footer.php') ?>
</body>
</html>