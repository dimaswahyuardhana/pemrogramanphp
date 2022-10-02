<?php
    class Pegawai{
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        public function __construct($nip, $nama, $jabatan, $agama, $status)
        {
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }

        public function gapok($jabatan){
            $this->jabatan = $jabatan;
            switch($jabatan){
                case 'Manager' : $gapok = 15000000; break;
                case 'Asisten Manager' : $gapok = 10000000; break;
                case 'Kepala Bagian' : $gapok = 7000000; break;
                case 'Staff' : $gapok = 4000000; break;
                default: $gapok = '';
            }
            return $gapok;
        }

        public function tunjab(){
            $tunjanganJabatan = $this->gapok($this->jabatan) * 0.2;
            return $tunjanganJabatan;
        }

        public function tunkel($status){
            $this->status = $status;
            $tunjanganKeluarga = ($this->status == 'Menikah') ? 0.1 * $this->gapok($this->jabatan) : 0;
            return $tunjanganKeluarga;
        }

        public function gajiKotor(){
            $gjKotor = $this->gapok($this->jabatan) + $this->tunjab() + $this->tunkel($this->status);
            return $gjKotor;
        }

        public function zakat($agama){
            $this->agama = $agama;
            $zakatProfesi = $this->agama == ('Islam' && $this->gajiKotor() >= 6000000) ? 0.025 * $this->gapok($this->jabatan) : 0;
            return $zakatProfesi;
        }

        public function total(){
            $ttlGaji = $this->gajiKotor() - $this->zakat($this->agama);
            return $ttlGaji;
        }

        public function mencetak(){
            echo '' .$this->nip;
            echo '<td>' .$this->nama; echo '</td>';
            echo '<td>' .$this->jabatan; echo '</td>';
            echo '<td>' .$this->agama; echo '</td>';
            echo '<td>' .$this->status; echo '</td>';
            echo '<td>'. $this->gapok($this->jabatan); echo '</td>';
            echo '<td>'. $this->tunjab(); echo '</td>';
            echo '<td>'. $this->tunkel($this->status); echo '</td>';
            echo '<td>'. $this->gajiKotor(); echo '</td>';
            echo '<td>'. $this->zakat($this->agama); echo '</td>';
            echo '<td>'. $this->total(); echo '</td>';
        }
    }
?>