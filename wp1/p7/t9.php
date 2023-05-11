<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Output</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }
            h1 {
                color: #008080;
                text-align: center;
            }
            table {
                border-collapse: collapse;
                margin: 0 auto;
                width: 60%;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #008080;
                color: #ffffff;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }
            #result {
                margin-top: 20px;
                text-align: center;
            }
        </style>
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
        ?>
        
        <table border="1">
            <tr>
                <th>Nilai a</th>
                <td><?php echo $nilai1; ?></td>
            </tr>
            <tr>
                <th>Nilai b</th>
                <td><?php echo $nilai2; ?></td>
            </tr>
            <tr>
                <th>Rumus Yang Dipilih</th>
                <td><?php echo $bd; ?></td>
            </tr>
            <tr>
                <th>Hasil Perhitungan Rumus</th>
                <td>
                    <?php
                        if ($bd == "segitiga"){
                            echo $sg;
                        }
                        else {
                            echo $pp;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
