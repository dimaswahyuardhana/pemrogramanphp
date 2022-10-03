<?php
require_once 'Bentuk2D.php';
class persegiPanjang extends Bentuk2D{

    public $p;
    public $l;
    public function namaBidang()
    {
        echo '<br/>Persegi Panjang';
    }

    public function __construct($p, $l)
    {
        $this->p = $p;
        $this->l = $l;
    }

    public function luasBidang()
    {
        return ($this->p * $this->l);
    }

    public function kelilingBidang()
    {
        return (2 * ($this->p + $this->l));
    }

    public function mencetak()
    {
        echo  $this->namaBidang();
        echo '<td>' . 'Panjang : ' . $this->p . ' Cm' . '<br/>'  . 'Lebar : ' . $this->l . ' Cm';
        echo '</td>';
        echo '<td>' . $this->luasBidang() . ' Cm';
        echo '</td>';
        echo '<td>' . $this->kelilingBidang() . ' Cm';
        echo '</td>';
    }
}