<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    $title = 'Nauka';
    include_once('../../includes/html-head.php');
    ?>
    <script type="text/javascript">
        <?php if ($_GET['hash']) { ?>
        location.hash = <?php echo "'".$_GET['hash']."';";
    } ?>
    </script>
</head>
<body>
<?php
$tasks = true;
include_once('../../includes/menu-header.php');
$typeSql = "SELECT name FROM categories WHERE code like '".$_GET['type']."'";
$typeSelected = mysqli_fetch_assoc($mysqli->query($typeSql))['name'];
?>
<div class="wrapper">
    <div id="banner" class="container"><h1><?echo $typeSelected?><a name="focus"></a></h1></div>
    <div id="welcome" class="container">

        <?
        $sql = "SELECT * FROM answers WHERE type LIKE '" . $_GET['type'] . "'";
        include_once '../../includes/classes/Paginator.php';

        $limit = (isset($_GET['limit'])) ? $_GET['limit'] : 1;
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $links = (isset($_GET['links'])) ? $_GET['links'] : 3;
        $query = "SELECT * FROM answers WHERE type LIKE '" . $_GET['type'] . "'";

        $Paginator = new Paginator($mysqli, $query);

        $results = $Paginator->getData( $limit,$page); ?>
            <?php for ($i = 0; $i < count($results->data); $i++) : ?>
                <img src="/images/db/<?php echo $results->data[$i]['pathUrl']; ?>" alt="Na ilustracji jest <?php echo $results->data[$i]['text']; ?>"/><br/>
                <h3><?php echo $results->data[$i]['text']; ?></h3>
            <?php endfor; ?>
        <?php echo $Paginator->createLinks($links, 'pagination pagination-sm', 'type='.$_GET['type'].'&hash=focus'); ?>
    </div>
</div>
<?php include_once('../../includes/footer.php') ?>
</body>
</html>
