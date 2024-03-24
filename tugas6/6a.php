<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
    <link rel="stylesheet" href="6a.css">
</head>
<body>
    <?php if(!isset($_GET["angka"])) : ?>
        <!-- <h1>Variable angka belum dimasukan di dalam url</h1> -->
    <?php else : ?>
        <?php for($i = $_GET["angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 == 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><h2><?= "$i" ?></h2></div>
                <?php endfor; ?>
                <br>
        </div>
        <?php endfor; ?>
    <?php endif; ?>
</body>
</html>