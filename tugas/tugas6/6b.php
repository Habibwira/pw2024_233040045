<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textfield</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px
            text-align: center;
        }
        .green {
            background-color: green;
        }
    </style>    
</head>
<body>

<form method="post">
    <label for="jumlah_angka">Masukkan Angka:</label>
    <input type="number" id="jumlah_angka" name="jumlah_angka" required>
    <input type="submit" value="Tampilkan">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $jumlah_angka = $_POST['jumlah_angka'];

    echo "<table>";
    for ($i = $jumlah_angka; $i >= 1; $i--) {
        echo "<tr>";
        $color_class = ($i % 2 != 0) ? 'green' : '';
        for ($j = 1; $j <= $i; $j++) {
            echo "<td class='$color_class'>$i</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}
?>

    
    
</body>
</html>