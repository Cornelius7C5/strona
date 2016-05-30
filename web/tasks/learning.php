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
    include_once('../../includes/html-head.php');
    ?>
</head>
<body>
<?php
$inProgress = true;
include_once('../../includes/menu-header.php')
?>
<div class="wrapper">
    <div id="banner" class="container"></div>
    <div id="welcome" class="container">
        <?
        $sql = "SELECT * FROM answers WHERE type LIKE '" . $_GET['type'] . "'";


        include_once '../../includes/classes/Paginator.php';


        $limit = (isset($_GET['limit'])) ? $_GET['limit'] : 5;
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $links = (isset($_GET['links'])) ? $_GET['links'] : 3;
        $query = "SELECT * FROM answers WHERE type LIKE '" . $_GET['type'] . "'";

        $Paginator = new Paginator($mysqli, $query);

        $results = $Paginator->getData($page, $limit); ?>
        <table>
            <?php for ($i = 0; $i < count($results->data); $i++) : ?>
                <tr>
                    <td><?php echo $results->data[$i]['id']; ?></td>
                    <td><?php echo $results->data[$i]['text']; ?></td>
                    <td><?php echo $results->data[$i]['pathUrl']; ?></td>
                    <td><?php echo $results->data[$i]['type']; ?></td>
                </tr>
            <?php endfor; ?>
        </table>
        <?//TODO: Wrong links generated or overrided params
        echo $Paginator->createLinks($links, 'pagination pagination-sm', 'type='.$_GET['type']); ?>
    </div>
</div>
<?php include_once('../../includes/footer.php') ?>
</body>
</html>
