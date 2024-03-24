<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6b</title>
    <link rel="stylesheet" href="6b.css">
</head>
<body>
    <form action="" method="post">
        <label for="jumlah=angka">Masukan angka :</label>
        <input type="text" name="angka" id="jumlah-angka">
        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <?php if(!isset($_POST["angka"])) : ?>
        <!-- <h1>Variable angka belum dimasukan di dalam url</h1> -->
    <?php else : ?>
        <?php for($i = $_POST["angka"]; $i >= 1; $i--) : ?>
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