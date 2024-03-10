<?php

$binatang = ["😸", "🐰", "🙈", "🐼","🐨", "🐮"];
$makanan = ["🍚", "🥐", "🍇", "🍗", "🥚"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>



<body>
 <h3>Daftar binatang</h3>
 <ol>
    <?php for($i = 0; $i < 5; $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
    <?php } ?>

 </ol>

 <h3>Daftar Makanan</h3>
 <ol>
    <?php for($i = 0; $i < 5; $i++) { ?>
        <li><?php echo $makanan[$i]; ?></li>
    <?php } ?>

 </ol>

  <hr>

  <h3>Daftar binatang</h3>
  <ol>
    <?php foreach ($binatang as $b) { ?>
        <li><?php echo $b; ?></li>
    <?php } ?>

 </ol>

 <hr>
 <h3>Daftar makanan</h3>
  <ol>
    <?php foreach ($makanan as $m) { ?>
        <li><?= $m; ?></li>
    <?php } ?>

 </ol>




 
       




    
</body>
</html>