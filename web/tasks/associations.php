<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <?php
    $title = 'Skojarzenia';
    include_once('../../includes/html-head.php') ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $("input[name=option]:radio").change(function (e) {
                $elem = $(e.currentTarget);
                if($elem.val()!=1){
                    $elem.parent().addClass('label-danger');
                }else{
                    $elem.parent().addClass('label-success');
                    $img = $('img.hint');
                    $img.attr('src', '/images/about.png');
                    var html = "\<a href=\"javascript:history.go(0)\"\>"+$img.parent().html();
                    console.log(html);
                    $img.parent().html(html);
                }
            });
        });
    </script>
</head>
<body>
<?php
$tasks = true;
include_once('../../includes/menu-header.php');
if (isset($_GET['type'])) {
    $typeSql = "SELECT name FROM categories WHERE code like '" . $_GET['type'] . "'";
    $typeSelected = mysqli_fetch_assoc($mysqli->query($typeSql))['name'];
}
?>
<div class="wrapper">
    <div id="banner" class="container">
        <h1>Skojarzenia: <? echo $typeSelected ?></h1>
    </div>
    <div id="welcome" class="container">

        <?php
        $query = "SELECT * FROM answers WHERE type LIKE '" . $_GET['type'] . "' ORDER BY RAND() LIMIT 1;";
        $answer = mysqli_fetch_assoc($mysqli->query($query));
        $answers = [$answer['text'] => true];

        $falseSql = "SELECT text FROM answers WHERE type LIKE '" . $_GET['type'] . "' AND id != " . $answer['id'] . " ORDER BY RAND() LIMIT 3;";
        $falseAnswers = $mysqli->query($falseSql);

        while ($row = $falseAnswers->fetch_assoc()) {
            $answers[$row['text']] = false;
        }

        ?>

        <h3><?php echo $answer['assoc'] ?></h3><br/>
        <div><img class="hint" src="/images/db/<? echo $answer['pathUrl'] ?>" alt="Obrazek pomocniczy" height="400"><br/></div>

        <form action="" id="assocForm">
            <?php
            $htmlAnswers = [];
            foreach ($answers as $key => $correct) {
                array_push($htmlAnswers, '<label class="assoc"><input type="radio" name="option" value="' . $correct . '"> ' . $key . '</label>');
            }
            shuffle($htmlAnswers);

            foreach ($htmlAnswers as $item) {
                echo $item;
            }

            ?>
        </form>

    </div>
</div>
<?php include_once('../../includes/footer.php') ?>

</body>
</html>
