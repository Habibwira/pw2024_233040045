<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras Komputer</title>
</head>
<body>

<h1 style="font-size: 24px; font-weight: bold;">Macam-macam perangkat keras komputer</h1>
<ul>

<?php
$perangkat_keras = array("Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD");
foreach ($perangkat_keras as $index => $perangkat) {
    echo "<li>" . ($index + 1) . ". $perangkat</li>";
}
?>

<h1 style="font_size: 24px; font-weight: bold;">Macam-macam perangkat keras komputer baru</h1>
<ul style="text-align: left;">
    <?php
    $perangkat_keras[] = "Card Reader";
    $perangkat_keras[] = "Modem";

    sort($perangkat_keras);

    foreach ($perangkat_keras as $index => $perangkat) {
        if ($perangkat === "Card Reader" || $perangkat === "Modem") {
            echo "<li style='text-decoration: underline red;'>" . ($index + 1) . ". $perangkat</li>";
        } else {
            echo "<li>" . ($index + 1) . ". $perangkat</li>";
        }
    }
    ?>
</ul>    
    
</body>
</html>