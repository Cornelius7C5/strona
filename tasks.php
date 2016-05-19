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
    $title = 'Ćwiczenia';
    include_once('includes/html-head.php') ?>
</head>
<body>
<?php
$tasks = true;
include_once('includes/menu-header.php')
?>
<div class="wrapper">
    <div id="banner" class="container"></div>
    <div id="welcome" class="container">

        <div class="title">
            <table>
                <tr>
                    <td><a href="web/tasks/learning.php">Nauka</a></td>
                    <td><a href="web/tasks/associations.php">Skojarzenia</a></td>
                    <td><a href="web/tasks/fill.php">Uzupełnianie Zdań</a></td>
                </tr>
            </table>
        </div>

    </div>
</div>
<?php include_once('includes/footer.php') ?>

</body>
</html>
