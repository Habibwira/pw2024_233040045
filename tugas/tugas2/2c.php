<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Urutan Angka</title>
<style>
    .salmon-box {
        background-color: salmon;
        padding: 5px;
        margin-bottom: 5px;
        border: 1px solid black;
        display: inline-block;
    }
</style>    
</head>
<body>

<?php

for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="salmon-box">' . $j . '</div>';
    }
    echo "<br>";
}
?>
    
</body>
</html>