<html>
  <head>
    <title>isi post</title>
    <style>
      body {
  background-color: #e0e7f2;
  color: #333;
  font-family: Arial, sans-serif;
  padding: 20px;
}

h1 {
  color: #1c3144;
  font-size: 32px;
  margin-bottom: 20px;
}

.post {
  background-color: #fff;
  border: 1px solid #a5b8d8;
  border-radius: 5px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
}

.post-title {
  font-size: 24px;
  margin-bottom: 10px;
}

.post-meta {
  color: #999;
  font-size: 14px;
  margin-bottom: 10px;
}

.post-body {
  font-size: 16px;
  line-height: 1.5;
}

    </style>
  </head>
  <body>
    <div class="post">
      <h1 class="post-title">Detail Komentar</h1>
      <div class="post-meta">
        <span class="post-author">Oleh <?php echo $_POST["nama"];?></span> |
        <span class="post-date"><?php echo date("d/m/Y");?></span>
      </div>
      <div class="post-body">
        <p><strong>Email:</strong> <?php echo $_POST["email"];?></p>
        <p><strong>Komentar:</strong> <?php echo $_POST["pesan"];?></p>
      </div>
    </div>
  </body>
</html>
