<?php 
    $sepatu = [
        [
            "produk" => "Nike Tiempo Legend 9 Academy MG",
            "jenis" => "Multiground (MG)",
            "warna" => "Barely volt",
            "ukuran" => "39-47",
            "gambar" => "nike1.png",
            "harga" => "Rp999.000,00"
        ],
        [
            "produk" => "ortuseight Catalyst Raiden FG",
            "jenis" => "Firm gorund (FG)",
            "warna" => "Black cyan ultra",
            "ukuran" => "37-46",
            "gambar" => "ortus1.jpg",
            "harga" => "Rp399.000,00"
        ],
        [
            "produk" => "MILLS Xyclops Kaldera  FG",
            "jenis" => "Firm ground (FG)",
            "warna" => "White-green-gold",
            "ukuran" => "38-45",
            "gambar" => "mils1.jpeg",
            "harga" => "Rp599.000,00"
        ],
        [
            "produk" => "Mizuno Morelia Neo III B Elite",
            "jenis" => "Firm ground (FG)",
            "warna" => "Red-white",
            "ukuran" => "39-42",
            "gambar" => "mizuno.jpeg",
            "harga" => "Rp2.499.800,00"
        ],
        [
            "produk" => "Specs Accelerator Lightspeed 3LX",
            "jenis" => "Firm ground (FG)",
            "warna" => "Jong indische",
            "ukuran" => "37-44",
            "gambar" => "specs1.jpeg",
            "harga" => "Rp899.800,00"
        ],
        [
            "produk" => "adidas X Speedflow 3 Lacelles Firm",
            "jenis" => "Firm ground (FG)",
            "warna" => "Core black/sonic ink/solar yellow",
            "ukuran" => "24,5-29,5",
            "gambar" => "adidas1.jpeg",
            "harga" => "Rp2.400.000,00"
        ],
        [
            "produk" => "adidas X speedportal Messi 3 firm",
            "jenis" => "Firm ground (FG)",
            "warna" => "Team solar orange/mint rush/core black",
            "ukuran" => "22,5-30,5",
            "gambar" => "adidas2.png",
            "harga" => "Rp1.200.000,00"
        ],
        [
            "produk" => "Calci Voltrix SC Elite",
            "jenis" => "Multiground (MG)",
            "warna" => "White-pink",
            "ukuran" => "38-44",
            "gambar" => "calci1.png",
            "harga" => "Rp569.800,00"
        ],
        [
            "produk" => "Nike Zoom Mercurial Superfly 9 Academy XXV MG",
            "jenis" => "Multiground (MG)",
            "warna" => "Hyper pink",
            "ukuran" => "37,5-47,5",
            "gambar" => "nike2.png",
            "harga" => "Rp1.499.000,00"
        ],
        [
            "produk" => "Puma Neymar Jr FUTURE 2.4 FG/AG Footbal Boots Men",
            "jenis" => "Firm ground (FG), Artificial ground (AG)",
            "warna" => "Coral gold",
            "ukuran" => "39-48,5",
            "gambar" => "puma1.jpeg",
            "harga" => "Rp1.999.000,00"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sepatu Sepa Bola</title>
</head>
<body>
    <h1>Daftar Sepatu Sepak Bola</h1>
    <?php foreach($sepatu as $spt) : ?>
    <ul>
        <li>
            <img src="img/<?= $spt["gambar"]; ?>">
        </li>
        <li><?= $spt ["produk"]; ?></li>
        <li><?= $spt ["jenis"]; ?></li>
        <li><?= $spt ["warna"]; ?></li>
        <li><?= $spt ["ukuran"]; ?></li>
        <li><?= $spt ["harga"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>