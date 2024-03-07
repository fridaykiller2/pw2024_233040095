<?php
$binatang = ["🐼", "🤖", "👻", "👽", "☠️"];
$makanan = ["🍔", "🍕", "🍱", "🍿", "🧇"];
$mobil = ["🚗", "🛻", "🚑", "🚙", "🚜"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>

</head>

<body>
 <h3>Daftar Binatang</h3>
  <ol>
    <?php for($i = 0; $i < 5; $i++) { ?>
    <li> <?php echo $binatang[$i]; ?></li>
    <?php } ?>
  </ol> 
  <hr>
  
  <h3>Daftar Makanan</h3>
  <ul>
    <?php for($i = 0; $i < 5; $i++) { ?>
    <li> <?php echo $makanan[$i] ?></li>
    <?php } ?>
  </ul>
  <hr>

  <h3>Daftar mobil</h3>
  <ol>
    <?php foreach ($mobil as $m) : ?>
        <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ol>
    <hr>
    

</body>


</html>