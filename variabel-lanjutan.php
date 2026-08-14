<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookoo</title>
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
            background: linear-gradient(#30AFFF, #2196F3);
            color: white;
            font-family: sans-serif; 
            text-align:center;
        }

       h1 {
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700; 
            font-style: normal;
            text-align:center;
        }

        h3 {
            font-family: "Sekuya", system-ui, sans-serif;
            font-weight: 400;
            font-style: normal;
            text-align:center;
        }

        img {
            border: 3px solid white;
            display: block; 
            margin: 0 auto; 
        }


    </style>
</head>
<body>
    <!-- Pindahkan h1 ke dalam body -->
    <h1>Bookoo</h1>

    <?php
    $buku = "Belajar PHP";
    $halaman = 20;
    $penerbit = "bukhorigramed";
    $tahun = 2023;
    $is_published = true; //boolean
    $img = "https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg";

    echo "<h3>Buku ini berjudul $buku, memiliki halaman sebanyak $halaman, penerbitnya adalah $penerbit, dan dibuat pada tahun $tahun</h3>";

    echo "<br>";
    echo "Buku " . $buku; 
    echo "<br>";
    var_dump($buku); 
    echo "<br>";
    var_dump($is_published);

    echo "<br>";

    
    echo "<br><p>$tahun</p>";

   
    echo "<img src='$img' alt='Gambar Buku PHP' style='max-width: 300px; border-radius: 8px;'>";
    ?>
</body>
</html>