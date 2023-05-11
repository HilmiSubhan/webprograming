<html>
    <head>
        <title>Form</title>
        <style>
        body {
            background-color: #e0e7f2;
            color: #333;
            font-family: Arial, sans-serif;
            }

        h1 {
            color: #1c3144;
            }

        hr {
            border: none;
            border-top: 1px solid #a5b8d8;
            }

        table {
                border-collapse: collapse;
                margin: 20px 0;
                }

        td {
            padding: 5px;
            }

        input[type="text"], textarea {
            border: 1px solid #a5b8d8;
            padding: 5px;
            width: 100%;
            max-width: 400px;
            }

        input[type="submit"], input[type="reset"] {
            background-color: #1c3144;
            border: none;
            color: #fff;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #15232d;
            }
        </style>
    </head>
    <body>
        <h1>BUKU TAMU</h1>
        <br>
        <h4>Komentar dan saran anda sangat kami butuhkan <br> Untuk Meningkatkan Kualitas situs kami</h4><hr>
        <form action="tampilkomentar.php" method="post">
            <table>
            <tr>
                <td>Nama Anda       :<input type="teks" name="nama" size="25"><br></td>
            </tr>
            <tr> 
                <td>Email Anda      :<input type="teks" name="email" size="25"><br></td>
            </tr>
            <tr>
                <td>komentar Anda   :<textarea name="pesan" rows="4" cols='50'></textarea></td>
            </tr>
            </table><br>
            <input type="submit" name="kirim" value="kirim">
            <input type="reset" name="batal" value="batal">
        </form>
    </body>
</html>