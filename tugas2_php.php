<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Pegawai</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <h1 align="center">DATA PEGAWAI DAN GAJI</h1>
        <div class="container px-5 my-5">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                <div class="form-floating mb-3">
                    <input class="form-control" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                    <label for="namaPegawai">Nama Pegawai</label>
                    <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="agama" aria-label="Agama">
                        <option value="--- PILIH AGAMA ANDA ---">--- PILIH AGAMA ANDA ---</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="KRISTEN">KRISTEN</option>
                        <option value="KATHOLIK">KATHOLIK</option>
                        <option value="HINDHU">HINDHU</option>
                        <option value="BUDDHA">BUDDHA</option>
                        <option value="KHONGHUCU">KHONGHUCU</option>
                    </select>
                    <label for="agama">Agama</label>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Jabatan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="manager" type="radio" value="manager" name="jabatan" />
                        <label class="form-check-label" for="manager">Manager</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="asisten" type="radio" value="asisten" name="jabatan"  />
                        <label class="form-check-label" for="asisten">Asisten</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="kabag" type="radio" value="kabag" name="jabatan"  />
                        <label class="form-check-label" for="kabag">Kabag</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="staff" type="radio" value="staff" name="jabatan" />
                        <label class="form-check-label" for="staff">Staff</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="menikah" type="radio" value="menikah" name="status"  />
                        <label class="form-check-label" for="menikah">Menikah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="belumMenikah" type="radio" value="belumMenikah" name="status" />
                        <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-info btn-block my-4" type="submit" name="proses">Simpan</button>
                </div>
            </form>
        </div>
        <?php
            $np = $_POST['namaPegawai'];
            $religi = $_POST['agama'];
            $jbtn = $_POST['jabatan'];
            $sts = $_POST['status'];
            $jmlAnak = $_POST['jumlahAnak'];
            $proses = $_POST['proses'];
            

            switch($jbtn){
                case 'manager': $gapok = '20000000'; break; 
                case 'asisten': $gapok = '15000000'; break;
                case 'kabag': $gapok = '10000000'; break;
                case 'staff': $gapok = '4000000'; break;
                default: $gapok = '';
            }

            $tunjab = 0.2 * $gapok;

            if($sts == 'menikah' && $jmlAnak <= 2) $tunkel = 0.05 * $gapok;
            else if($sts == 'menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) $tunkel = 0.1 * $gapok;
            else if($sts == 'menikah' && $jmlAnak > 5) $tunkel = 0.15 * $gapok;
            else $tunkel = 0;

            $gajiKotor = $gapok + $tunjab + $tunkel;
            $zakatProfesi = ($religi == 'ISLAM'  && $gajiKotor >= 6000000) ? (0.025 * $gajiKotor) : 0;
            $thp = $gajiKotor - $zakatProfesi;
            
            if(isset($proses)){ ?>

                <div class="container">
                <table class="table table-striped table-hover mt-5">
                    <thead>
                        <tr>
                          <!-- <th>#</th> -->
                                    <th>Nama Pegawai</th>
                                    <th>Agama</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Jumlah Anak</th>
                                    <th>Gaji Pegawai</th>
                                    <th>Tunjangan Jabatan</th>
                                    <th>Tunjangan Keluarga</th>
                                    <th>Gaji Kotor</th>
                                    <th>Zakat Profesi</th>
                                    <th>Take Home Pay</th>
                          <!-- <th>Total Bayar</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        
                          <td><?= $np; ?></td>
                          <td><?= $religi; ?></td>
                          <td><?= $jbtn; ?></td>
                          <td><?= $sts; ?></td>
                          <td><?= $jmlAnak; ?></td>
                          <td><?= $gapok; ?></td>
                          <td><?= $tunjab; ?></td> 
                          <td><?= $tunkel; ?></td>
                          <td><?= $gajiKotor; ?></td>
                          <td><?= $zakatProfesi; ?></td>
                          <td><?= $thp; ?></td>         
                        </tr>   
                      </tbody>     
                </table>
              </div>
              <?php } ?>
        ?>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>