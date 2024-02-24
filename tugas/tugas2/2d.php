<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kotak Hitam Putih</title>
<style>
    .black-box, .white-box {
        width: 50px;
        height: 50px;
        border: 1px solid black;
        display: inline-block;
    }

    .black-box {
        background-color: black;
    }

    .white-box {
        background-color: white;
    }
</style>    
</head>
<body>

<?php

for ($row = 1; $row <= 5; $row++) {
    
    for ($col = 1; $col <= 5; $col++) {

        if (($row % 2 == 1 && $col % 2== 1) || ($row % 2 == 0 && $col % 2 == 0)) {
            echo '<div class="black-box"></div>';
        } else {
            echo '<div class="white-box"></div>'; 
        }
    }
    echo '<br>'; 
}
?>
    
</body>
</html>