<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Data Pegawai dan Gaji</h1>
    <?php
        require 'Pegawai.php';

        $p1 = new Pegawai(12431, 'Dimas Wahyu Ardhana', 'Manager', 'Islam', 'Menikah');
        $p2 = new Pegawai(12432, 'Della Risqi', 'Asisten Manager', 'Islam', 'Menikah');
        $p3 = new Pegawai(12433, 'Riza Saputri', 'Kepala Bagian', 'Islam', 'Menikah');
        $p4 = new Pegawai(12434, 'Rilo Bagas', 'Staff', 'Islam', 'Belum Menikah');
        $p5 = new Pegawai(12435, 'Naruto', 'Kepala Bagian', 'Khonghucu', 'Menikah');

    ?>

    <table class="table">
    <thead>
        <tr class="table-primary">
            <th scope="col">NO</th>
            <th scope="col">NIP</th>
            <th scope="col">NAMA</th>
            <th scope="col">JABATAN</th>
            <th scope="col">AGAMA</th>
            <th scope="col">STATUS</th>
            <th scope="col">GAJI POKOK</th>
            <th scope="col">TUNJANGAN JABATAN</th>
            <th scope="col">TUNJANGAN KELUARGA</th>
            <th scope="col">GAJI KOTOR</th>
            <th scope="col">ZAKAT PROFESI</th>
            <th scope="col">GAJI BERSIH</th>
        </tr>
    </thead>
    <tbody class="table table-danger">
        
            <tr>
                <td><?= $no = '1' ?></td>
                <td><?= $p1->mencetak() ?></td>
            </tr>
            
            <tr>
                <td><?= $no = '2' ?></td>
                <td><?= $p2->mencetak() ?></td>
            </tr>
            <tr>
                <td><?= $no = '3' ?></td>
                <td><?= $p3->mencetak() ?></td>
            </tr>
            <tr>
                <td><?= $no = '4' ?></td>
                <td><?= $p4->mencetak() ?></td>
            </tr>
            <tr>
                <td><?= $no = '5' ?></td>
                <td><?= $p5->mencetak() ?></td>
            </tr>
            <?php $no++ ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>