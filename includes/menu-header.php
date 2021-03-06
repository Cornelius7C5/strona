<div id="header-wrapper">
    <div id="header" class="container">

        <?php
        include_once 'functions.php';
        sec_session_start(); // Our custom secure way of starting a PHP session.

        // Include database connection and functions here.  See 3.1.

        if (login_check($mysqli) == true) {?>
            <a href="/web/actions/logout.php">
                <div id="login_button">Wyloguj</div>
            </a>
        <? } else { ?>
            <a href="/web/actions/login.php">
                <div id="login_button">Zaloguj</div>
            </a>
        <? } ?>

        <a href="/index.php" id="logo-link">
            <div id="logo">
                <span class="icon"><img src="/images/logo.gif" width="90" height="90" alt=""/></span>
                <h1>POMOC W AFAZJI</h1>
            </div>
        </a>

        <div id="menu">
            <ul>
                <li class="<? echo $index ? 'active' : '' ?>"><a href="/index.php" accesskey="1">Strona domowa</a></li>
                <li class="<? echo $about ? 'active' : '' ?>"><a href="/about.php" accesskey="2">O afazji</a></li>
                <li class="<? echo $treatment ? 'active' : '' ?>"><a href="/treatment.php" accesskey="3">Leczenie</a>
                </li>
                <li class="<? echo $tasks ? 'active' : '' ?>"><a href="/tasks.php" accesskey="4">Ćwiczenia</a>
                </li>
                <li class="<? echo $contact ? 'active' : '' ?>"><a href="/contact.php" accesskey="5">Kontakt </a></li>
            </ul>
        </div>
    </div>
</div>