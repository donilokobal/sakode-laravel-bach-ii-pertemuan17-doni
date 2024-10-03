<?php

class Mobil {

    // property
public $merek;
public $model;
public $tahun;
public $warna;

// Method

public function start()
{
    echo 'Mobil dinyalakan';
}

public function cek($nama, $ket)
{
    echo 'Merek :' . $this->merek.'<br>';
    echo 'Model :' . $this->model.'<br>';
    echo 'Tahun :' . $this->tahun.'<br>';
    echo 'Warna :' . $this->warna.'<br>';
    echo 'Pemilik :' . $nama.'<br>';
    echo 'Pemilik :' . $ket.'<br>';
}


    
public function stop ()
{
    echo 'Mobil dimatikan';
}

}

// object

$mobil = new Mobil();
$mobil->merek = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Kuning';

// Pangil Method
$ket='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ratione, sequi aspernatur accusamus reiciendis, adipisci obcaecati maxime ut odit rem dignissimos hic nemo, asperiores architecto laborum eveniet quam facilis natus.';

$mobil->cek('Doni',$ket);
