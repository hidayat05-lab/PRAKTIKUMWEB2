<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      <form>
       Nama : <input type="text" name="nama" value="" size="30"><br>
       Mata kuliah :
       <select name="matkul">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemograman Web</option>
       </select><br>
       Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
       Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
       Nilai Praktikum : <input type="text" name="nilai_tugas" value="" size="6"><br>
       <button name="proses">simpan</button>
</form method="get">
<?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$Nilai_UTS = $_GET['nilai_uts'];
$Nilai_UAS = $_GET['nilai_uas'];
$Nilai_tugas = $_GET['nilai_tugas'];
?>
<?=$proses ?>
nama siswa <?=$nama_siswa ?><br>
mata kuliah <?=$mata_kuliah ?><br>
nilai UTS <?=$Nilai_UTS ?><br>
nilai UAS <?=$Nilai_UAS ?><br>
nilai tugas <?=$Nilai_tugas ?><br>
</body>
</html>