<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);

if (! $error) {
    $error = 'Wystąpił błąd!';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Błąd logowania</title>
    <link rel="stylesheet" href="../../css/main.css" />
</head>
<body>
<h1>Wystąpił problem</h1>
<p class="error"><?php echo $error; ?></p>
</body>
</html>