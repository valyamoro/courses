<?php

$rows = 9;
$cols = 9;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo '<table border="1">';
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
            for ($td = 1; $td <= $cols; $td++) {
                echo '<td> ' . $td * $tr . '</td>';
            }
        echo '</tr>';
    }
echo '</table>';
?>
</body>
</html>
