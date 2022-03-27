<?php
    class pp{
        public $panjang;
        public $lebar;
        public function luas() { //method
            $hasil = $this->panjang * $this->lebar;
            return $hasil;
        }
    }

    class pp1 extends pp{ //anaknya
        public $tinggi; //objek baru
        function volume_balok(){ //fungsi
            $hasil = $this->panjang * $this->lebar * $this->tinggi;
            return $hasil;
        }
    }

    //diketahui
    $pp1 = new pp1;
    $pp1->panjang = 25;
    $pp1->lebar = 90;
    $pp1->tinggi = 50;

    echo "Hasil dari persegi panjang adalah =".$pp1->luas();
    echo "<br/>Ini adalah hasil dari volume si balok = ".$pp1->volume_balok();
?>