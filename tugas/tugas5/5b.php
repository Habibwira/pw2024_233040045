?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?> 

    <ul>
        <li>Nama :<?php echo $mhs["nama"]; ?></li>
        <li>NRP :<?php echo $mhs["nrp"]; ?></li>
        <li>Email :<?php echo $mhs["jurusan"]; ?></li>
        <li>Jurusan :<?php echo $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

       

    
</body>
</html> 