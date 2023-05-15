<?php
    class mahasiswa1{
        public $nim = "300605";
        public $nama = "adindad";
        public $jurusan = "pplg";
        function tampil_Biodata(){
            echo $this-> nim, "<br>";
            echo $this-> nama, "<br>";
            echo $this-> jurusan;
        }
    }
    $mahasiswa1= new mahasiswa1();
         $mahasiswa1->nim = "300605";
         $mahasiswa1->nama = "adindad";
         $mahasiswa1->jurusan = "pplg";
        
    $mahasiswa1->tampil_Biodata();

    $mahasiswa1 = new mahasiswa1("300605", "adindad", "pplg");
    
