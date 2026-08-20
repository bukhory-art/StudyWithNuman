<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tugas Array Looping</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 10px;
            padding: 10px;
        }

        body {
            min-height: 100vh;
            background-color: #1e1e1e;
            color: white;
            font-family: sans-serif; 
            text-align: center;
        }

        h1 {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700; 
            font-style: normal;
            text-align: center;
        }

        h3 {
            font-family: "Sekuya", system-ui, sans-serif;
            font-weight: 400;
            font-style: normal;
            text-align: center;
        }

        table, .table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>

<?php

echo "<h1>Tugas Array Looping</h1></br>";

echo "<h3>Tugas Level 1</h3>";



// Tugas Level 1

$teman=["Atha", "Ammar", "Azzam", "Rafa", "Ridho", "Akhtar"];

echo "<ul>";

foreach ($teman as $namaTeman) {

    echo "<h3><li>$namaTeman</li></h3>";

}

echo "</ul>";





// Tugas Level 2

echo "<table class='table' border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th> <!-- TAMBAHAN -->
    <th>Status</th>
</tr>";

$perpustakaan = [

    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "tahun" => 2005, "stok" => 12],

    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "tahun" => 1980, "stok" => 5],

    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "tahun" => 2009, "stok" => 0],

];

$no = 1;


// Tugas Level 3
$totalStok = 0;
$bukuTerbanyak = $perpustakaan[0];


foreach ($perpustakaan as $buku) {

$status = $buku["stok"] > 0 ? "Tersedia" : "Habis";


// TAMBAHAN
$warna = $buku["stok"] == 0 ? ' style="background:#fdd"' : '';

echo "<tr$warna>";

echo "<td>$no</td>";

echo "<td>" . $buku["judul"] . "</td>";

echo "<td>" . $buku["penulis"] . "</td>";


// TAMBAHAN
echo "<td>" . $buku["tahun"] . "</td>";

echo "<td>$status</td>";

echo "</tr>";


// TAMBAHAN
$totalStok += $buku["stok"];

if ($buku["stok"] > $bukuTerbanyak["stok"]) {
    $bukuTerbanyak = $buku;
}


$no++;

}


// TAMBAHAN
echo "<p>Jumlah judul: " . count($perpustakaan) . "</p>";

echo "<p>Total stok: " . $totalStok . "</p>";

echo "<p>Buku dengan stok terbanyak: " 
    . $bukuTerbanyak["judul"] 
    . " (" . $bukuTerbanyak["stok"] . " buku)</p>";

?>

</table>

</body>

</html>