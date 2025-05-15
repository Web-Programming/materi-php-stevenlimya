<?php

//Cara penulisan class Mobil
class Mobil{

    //Cara penulisan property
    public $warna;
    public $merk;

    //Cara penulisan method
    function maju() {
    // isi method maju()
        return "Mobil maju";
    }
    
    function berhenti() {
    // isi method berhenti()
        return "Mobil berhenti";
    }
}

//buat object dari class Mobil (instansiasi)
$mobil_steven = new Mobil();

// set property
$mobil_steven->warna = "Merah";
$mobil_steven->merk = "Lamborghini";

// tampilkan property
echo "Mobil steven";
echo "<br>Warna : ". $mobil_steven->warna;
echo "<br>Merk : ". $mobil_steven->merk;
echo "<br>";

// tampilkan method
echo $mobil_steven->maju();
echo "<br>";
echo $mobil_steven->berhenti();
?>    
