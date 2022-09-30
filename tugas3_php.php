<?php
    $mhs1 = ['nim' => 12431, 'nama' => 'Dimas Wahyu Ardhana', 'nilai' => 80];
    $mhs2 = ['nim' => 12432, 'nama' => 'Della Risqi', 'nilai' => 85];
    $mhs3 = ['nim' => 12433, 'nama' => 'Riza Saputri', 'nilai' => 90];
    $mhs4 = ['nim' => 12434, 'nama' => 'Rizza Fakhrul', 'nilai' => 95];
    $mhs5 = ['nim' => 12435, 'nama' => 'Rizal Kustanto', 'nilai' => 80];
    $mhs6 = ['nim' => 12436, 'nama' => 'Agung Laksono', 'nilai' => 83];
    $mhs7 = ['nim' => 12437, 'nama' => 'Wahyu Setia', 'nilai' => 91];
    $mhs8 = ['nim' => 12438, 'nama' => 'Fuat Fauzi', 'nilai' => 87];
    $mhs9 = ['nim' => 12439, 'nama' => 'Aldebaran', 'nilai' => 60];
    $mhs10 = ['nim' => 12440, 'nama' => 'Tuan Uzumaki', 'nilai' => 50];

    $ar_predikat = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'predikat'];
    $mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];

    $jmlTabel = count($mahasiswa);
    $jmlNilai = array_column($mahasiswa, 'nilai');
    $maxRange = max($jmlNilai);
    $minRange = min($jmlNilai);
    
    $jmlAkhir = array_sum($jmlNilai);
    $average = $jmlAkhir / $jmlTabel;

    $keterangan = [
        'Jumlah Mahasiswa' => $jmlTabel,
        'Nilai Tertinggi' => $maxRange,
        'Nilai Terendah' => $minRange,
        'Nilai Rata-Rata' => $average
    ];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
        <table class="table table-primary">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NILAI</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">GRADE</th>
                    <th scope="col">PREDIKAT</th>
                </tr>
            </thead>
            <tbody class="table-danger">
                <?php
                    $no = 1;
                    foreach($mahasiswa as $siswa){
                        if($siswa['nilai'] >= 90 && $siswa['nilai'] <= 100) $grade = 'A';
                        else if($siswa['nilai'] >= 80 && $siswa['nilai'] < 90) $grade = 'AB';
                        else if($siswa['nilai'] >= 70 && $siswa['nilai'] < 80) $grade = 'B';
                        else if($siswa['nilai'] >= 60 && $siswa['nilai'] < 70) $grade = 'BC';
                        else if($siswa['nilai'] >= 50 && $siswa['nilai'] < 60) $grade = 'C';
                        else if($siswa['nilai'] >= 40 && $siswa['nilai'] < 50) $grade = 'D';
                        else if($siswa['nilai'] >= 30 && $siswa['nilai'] < 40) $grade = 'E';
                        else $grade = '';
                        
                        $ternary = ($siswa['nilai'] >= 60) ? 'Lulus' : 'Tidak';

                        switch($grade){
                            case 'A': $predikat = 'Memuaskan'; break;
                            case 'AB': $predikat = 'Sangat Baik'; break;
                            case 'B': $predikat = 'Baik'; break;
                            case 'BC': $predikat = 'Cukup Baik'; break;
                            case 'C': $predikat = 'Cukup'; break;
                            case 'D': $predikat = 'Kurang'; break;
                            case 'E': $predikat = 'Sangat kurang'; break;
                            default: $predikat = '';
                        }

                    
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $siswa['nim'] ?></td>
                    <td><?= $siswa['nama'] ?></td>
                    <td><?= $siswa['nilai'] ?></td>
                    <td><?= $ternary ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>

                <?php $no++; } ?>
            </tbody>
            <tfoot class="table-warning">
                <tr>
                    <th colspan="2"></th>
                    <th colspan="1"></th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th colspan="1"></th>
                </tr>
                <?php foreach ($keterangan as $ktg => $hasil) { ?>
                    <tr>
                        <th colspan="2"><?= $ktg ?></th>
                        <th colspan="1"><?= $hasil ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>