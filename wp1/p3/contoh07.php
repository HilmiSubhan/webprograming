<html>
    <head>
        <title>menghitung luas lingkaran</title>
    </head>
    <body>
    <?php
    //konstanta unutk nilai judul
    define("Judul","Hitung Luas Lingkaran");
    //konstanta untuk nilai phi
    define("PHI",3.14);
    echo Judul;
    $r=10;
    echo "<br> jari-jari : $r<br>\n";
    $luas=PHI*$r*$r;
    echo "luas Lingkaran = $luas";
    ?>
    </body>
</html>