<?php
    require_once 'Bentuk2D.php';
    class Lingkaran extends Bentuk2D{
        public $jari2;
        public $phi;
        public function namaBidang(){
            echo '<br>Lingkaran';
        }
        public function __construct($phi, $jari2)
        {
            $this->phi = $phi;
            $this->jari2 = $jari2;
        }
        public function luasBidang()
        {
            return (pow($this->jari2, 2) * $this->phi);
        }

        public function kelilingBidang()
        {
            return (2 * $this->phi * $this->jari2);
        }

        public function mencetak()
        {
            echo  $this->namaBidang();
            echo '<td>' . 'Phi : ' . $this->phi . ' Cm' . '<br/>'  . 'Jari-jari : ' . $this->jari2 . ' Cm';
            echo '</td>';
            echo '<td>' . $this->luasBidang() . ' Cm';
            echo '</td>';
            echo '<td>' . $this->kelilingBidang() . ' Cm';
            echo '</td>';
        }
    }
?>