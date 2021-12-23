<?php
    // koneksi ke engine host mysql
    // valuenya adalah host, user, dan password
    $Open = mysqli_connect("localhost", "root", "", "");
        if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !<br>");
        }
        //jika koneksi ke host berhasil
        else{
            echo "Koneksi ke Engine MySQL Berhasil !<br>";
        }
    
    // koneksi ke database mysql
    // valuenya adalah database name
    $koneksi = mysqli_connect("localhost", "root", "", "db_projek");
        if (!$koneksi){
            die ("Koneksi ke Database Gagal !");
        }
        //jika koneksi ke database berhasil
        else{
            echo "Koneksi ke Database MySQL Berhasil !";
        }
?>