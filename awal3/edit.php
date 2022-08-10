<?php

        
   $id = $_GET['id'];
   $nama = $_GET['nama'];
   $asal = $_GET['asal']; 

   //koneksi
     $database = new PDO ("mysql:host=localhost;dbname=ppdb","root",""); 
   //query
     $query = $database->query ("UPDATE calon_siswa SET `nama`='akhir' WHERE id = 1");