<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
        // penulisan array dapat dibuat sepert berikut 
        $nama [] = "Dwi ";
        $nama [] = "Teguh ";
        $nama [] = "Imanto ";
        echo $nama[1] . $nama[2] . $nama[0];
        echo "<br>";

        // menghitung jumlah elemen array
        echo "<br>";
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>