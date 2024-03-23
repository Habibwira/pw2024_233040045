<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kolom</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        .green {
            background-color: green;
        }
    </style>
</head>
<body>        

<table>
  <?php
  for ($i = 10; $i >= 1; $i--) {
    echo "<tr>";
    $color_class = ($i % 2 != 0) ? 'green' : '';
    for ($j = 1; $j <= $i; $j++) {
        echo "<td class='$color_class'>$i</td>";
    }
    echo "</tr>";
  }
  ?>

</table>
    
</body>
</html>