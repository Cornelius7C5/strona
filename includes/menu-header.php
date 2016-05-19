<div id="header-wrapper">
    <div id="header" class="container">

        <?php
        include_once 'functions.php';

        // Include database connection and functions here.  See 3.1.

        if (login_check($mysqli) == true) {
            echo '<a href="/web/actions/logout.php"><div id="login_button">Wyloguj</div></a>';
        } else {
            echo '<a href="/web/actions/login.php"><div id="login_button">Zaloguj</div></a>';
        }
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>

        <div id="logo">
            <span class="icon"><img src="/images/logo.gif" width="90" height="90" alt=""/></span>

            <h1><a href="#">POMOC W AFAZJI</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="<? echo $index ? 'active' : '' ?>"><a href="/index.php" accesskey="1">Strona domowa</a></li>
                <li class="<? echo $about ? 'active' : '' ?>"><a href="/about.php" accesskey="2">O afazji</a></li>
                <li class="<? echo $treatment ? 'active' : '' ?>"><a href="/treatment.php" accesskey="3">Leczenie</a>
                </li>
                <li class="<? echo $exercises ? 'active' : '' ?>"><a href="/tasks.php" accesskey="4">Ćwiczenia</a>
                </li>
                <li class="<? echo $contact ? 'active' : '' ?>"><a href="/contact.php" accesskey="5">Kontakt </a></li>
            </ul>
        </div>
    </div>
</div>