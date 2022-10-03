<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{

    public $a;
    public $t; 
    public $b; 
    public function namaBidang()
    {
        echo '<br/>Segitiga Sama Sisi';
    }

    public function __construct($a, $t, $b)
    {
        $this->a = $a;
        $this->t = $t;
        $this->b = $b;
    }

    public function luasBidang()
    {
        return (0.5 * ($this->a * $this->t));
    }

    public function kelilingBidang()
    {
        return ($this->a + $this->b + $this->t);
    }

    public function mencetak()
    {
        echo  $this->namaBidang();
        echo '<td>' . 'Alas : ' . $this->a . ' Cm' . '<br/>' . 'Tinggi : ' . $this->t . ' Cm' . '<br>' . 'Miring : ' . $this->b . ' Cm';
        echo '</td>';
        echo '<td>' . $this->luasBidang() . ' Cm';
        echo '</td>';
        echo '<td>' . $this->kelilingBidang() . ' Cm';
        echo '</td>';
    }
}