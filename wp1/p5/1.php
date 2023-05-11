<?php
  echo "<form>";
  echo "<div style='display: inline-block; margin-right: 10px;'>";
  echo "<label for='nama'>Nama:</label><br>";
  echo "<input type='text' id='nama' name='nama'><br>";
  echo "<label for='alamat'>Alamat:</label><br>";
  echo "<input type='text' id='alamat' name='alamat'><br>";
  echo "</div>";
  echo "<div style='display: inline-block;'>";
  echo "<label for='email'>Email:</label><br>";
  echo "<input type='email' id='email' name='email'><br>";
  echo "<label for='password'>Password:</label><br>";
  echo "<input type='password' id='password' name='password'><br>";
  echo "</div>";
  echo "<div>";
  echo "<label for='gender'>Jenis Kelamin:</label><br>";
  echo "<input type='radio' id='male' name='gender' value='male'>";
  echo "<label for='male'>Laki-laki</label><br>";
  echo "<input type='radio' id='female' name='gender' value='female'>";
  echo "<label for='female'>Perempuan</label><br>";
  echo "</div>";
  echo "<div>";
  echo "<label for='tanggal_lahir'>Tanggal Lahir:</label><br>";
  echo "<input type='date' id='tanggal_lahir' name='tanggal_lahir'><br>";
  echo "</div>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
?>
