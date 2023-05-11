<html>
    <head>
        <title>Tampilan Output</title>
    </head>
    <body>
        <h1>HASIL HITUNG RUMUS</h1>
        <?php
        $nilai1=$_POST["nilai1"];
        $nilai2=$_POST["nilai2"];
        $bd=$_POST["bd"];
        //Rumus segitiga
        $sg=1/2*($nilai1*$nilai2);
        //Rumus persegi panjang
        $pp=$nilai1*$nilai2;
        
        //Tampilan
        echo"Nilai a adalah = ",$nilai1,"<br>";
        echo"Nilai b Adalah = ",$nilai2,"<br>";
        echo"Rumus Yang Dipilih adalah = ",$bd,"<br>";
        if ($bd == "segitiga"){
            echo "Hasil Perhitungan Rumus = ",$sg;
        }
        else {
            echo "Hasil Perhitungan Rumus = ",$pp;
        }
        
        ;?>
    </body>
</html>