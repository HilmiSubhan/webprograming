<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan input</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		h1 {
			text-align: center;
			color: #008080;
			margin-top: 30px;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 80%;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			border-radius: 10px;
		}
		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid #ccc;
		}
		th {
			background-color: #008080;
			font-weight: bold;
			color: #fff;
		}
		input[type="number"] {
			padding: 8px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="radio"] {
			margin-right: 5px;
		}
		input[type="submit"], input[type="reset"] {
			background-color: #008080;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
		}
		input[type="submit"]:hover, input[type="reset"]:hover {
			background-color: #00B0B0;
		}
	</style>
</head>
<body>
	<h1>Rumus-rumus</h1>
	<form action="t9.php" method="POST">
		<table>
			<tr>
				<th>Nilai1</th>
				<td><input type="number" name="nilai1"></td>
			</tr>
			<tr>
				<th>Nilai2</th>
				<td><input type="number" name="nilai2"></td>
			</tr>
			<tr>
				<th>Bangun Datar</th>
				<td>
					<input type="radio" name="bd" value="segitiga">Segitiga<br>
					<input type="radio" name="bd" value="Persegi Panjang">Persegi Panjang
				</td>
			</tr>
		</table>
		<input type="submit" value="Hitung">
		<input type="reset" value="Batal">
	</form>
</body>
</html>
