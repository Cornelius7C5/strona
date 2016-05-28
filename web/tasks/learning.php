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
    $title = 'Nauka';
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
            <h2>Nauka</h2>
        </div>
        <?
         $categories = ['CZŁOWIEK','POJECIA OGÓLNE','ZDROWIE','ŻYWNOŚĆ I POSIŁKI']
        ?>
    </div>
</div>
<?php include_once('../../includes/footer.php') ?>

</body>
</html>
