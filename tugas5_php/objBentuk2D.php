<?php
    require_once 'Lingkaran.php';
    require_once 'persegiPanjang.php';
    require_once 'Segitiga.php';

    $lingkaran = new Lingkaran(3.14, 20);
    $persegipanjang = new persegiPanjang(20, 30);
    $segitiga = new Segitiga(4, 15, 9, 9);
    $bidang2d = [$lingkaran, $persegipanjang, $segitiga];
    $judul = ['NO', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidang 2D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">TABLE BIDANG 2D DAN UKURANNYA</h1>
    <table class="table">
    <thead>
        <tr class="table-danger">
            <?php
                foreach ($judul as $jd){
            ?>
            <th><?= $jd ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($bidang2d as $bdg){
        ?>
        <tr class="table-warning">
            <td><?= $no ?></td>
            <td><?= $bdg->mencetak() ?></td>
        </tr>
        <?php $no++;
            } ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>