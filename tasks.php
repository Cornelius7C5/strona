<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $title = 'Ćwiczenia';
    include_once('includes/html-head.php') ?>
</head>
<body>
<?php
$tasks = true;
include_once('includes/menu-header.php')
?>
<div class="wrapper">
    <div id="welcome" class="container">
        <?
        if (login_check($mysqli) == true) {
            $sql = "SELECT * FROM `categories` WHERE parent IS NULL ORDER BY name ASC";
            $result = $mysqli->query($sql);

            echo '<ol class="categories">';
            while ($row = $result->fetch_assoc()) {
                if (is_null($row['parent'])) {
                    $subsql = "SELECT * FROM `categories` WHERE parent LIKE " . $row['id'] . " ORDER BY name ASC";
                    $resultsub = $mysqli->query($subsql);
                    echo "<li>" . $row['name'];
                    echo '<ul class="sub-categories">';
                    while ($sub = $resultsub->fetch_assoc()) {
                        echo '<li class="subcategory">' . $sub['name'] . '</li>';
                        echo '<li><a href="/web/tasks/learning.php?type=' . $sub['code'] . '">Nauka</a></li>';
                        echo '<li><a href="/web/tasks/associations.php?type=' . $sub['code'] . '">Skojarzenia</a></li>';
                        echo '<li><a href="/web/tasks/fill.php?type=' . $sub['code'] . '">Uzupełnianie</a></li>';
                        echo '<li>&nbsp;</li>';
                    }
                    echo '</ul>';
                    echo "</li>";

                }
            }
            echo '</ol>';
        } else {
            ?>
            <p><a href="web/actions/login.php">Zaloguj się</a> lub <a href="web/actions/register.php">zarejestruj</a> aby korzystać z ćwiczeń.</p>
            <?
        }
        ?>


    </div>
</div>
<?php include_once('includes/footer.php') ?>

</body>
</html>
