<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Welcome to my First Website with PHP</h1>"; ?>
    <p>Loremm impsum dolor set amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    <p>My Name is <?php echo "<b> Angel </b>"; ?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        $nama = "Angel"; //string
        $umur = 19; //number
        $perempuan = true; //boolean
        $saldo = null; //null
        $hobby = ['Menyanyi', 'Dance', 'Makan']; //array
        $makanan_fav = array('Kentang', 'Manga', 'Mie'); //array
        #ini juga komentar

        //Variabel Statis
        const PI = 3.14;
        echo "Nilai PI = ", PI;
        echo "<br/>";
        echo "Nama = $nama";
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        //echo "Hobi 1. $hobby[0]"; //array
        
        //menampilkan array
        foreach ($hobby as $key => $value) {
            echo "Hobi ". ($key+1)." = $value <br/>";
        }

        $saldo = 1000; //dollar
        //tampilkan symbol dolar ($) menggunakan echo 
        echo "Saldo = \"\$$saldo USD\"";


    ?>
</body>
//SELF PAGE
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

//OTHER PAGE
<form action="create.php" method="POST">

Mahasiswa :
<input type="text" name="nama"/><br />
<input type="submit" value="Add" />

</form>

</html>