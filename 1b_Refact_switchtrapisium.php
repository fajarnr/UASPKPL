<?php

interface LuasTrapisium{
    public function hitung($panjangsisi, $tinggi);
}

    
class luas implements LuasTrapisium{
    public function hitung($panjangsisi, $tinggi){
        $satuperdua=1/2;
        $hasil = $satuperdua*$panjangsisi*$tinggi;
        Echo "Luas Trapisium adalah  : ". $hasil;
    }
}

    class hitung
    {
        public static function pilihan($pilihan){
        switch ($pilihan) {
            case 'luas':
                return new luas;
                break;
            default:
                return FALSE;
        }
    }
}

$panjangsisi=20;
$tinggi=15;
hitung::pilihan('luas')->hitung($panjangsisi, $tinggi);

?>