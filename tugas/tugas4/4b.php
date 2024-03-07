<?php 

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

echo "<h2>Macam-macam perangkat keras komputer</h2><br>";

for($i = 0; $i < count($hardware); $i++) {
    $n = $i + 1;
    echo "$n. $hardware[$i]<hr>";
}

echo "<h2>Macam-macam perangkat keras komputer baru</h2><br>";

array_push($hardware, "Card Reader", "Modem");
sort($hardware);

for($i = 0; $i < count($hardware); $i++) {
    $n = $i + 1;
    echo "$n. $hardware[$i]<hr>";
}