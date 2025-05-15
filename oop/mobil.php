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
$mobil_angel = new Mobil();

// set property
$mobil_angel->warna = "Merah";
$mobil_angel->merk = "Lamborghini";

// tampilkan property
echo "Mobil Angel";
echo "<br>Warna : ". $mobil_angel->warna;
echo "<br>Merk : ". $mobil_angel->merk;
echo "<br>";

// tampilkan method
echo $mobil_angel->maju();
echo "<br>";
echo $mobil_angel->berhenti();
?>    