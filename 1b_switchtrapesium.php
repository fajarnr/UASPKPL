<?php
class LuasTrapisium{
    
    public $satuperdua;
    
    public function __construct($satuperdua = 1/2){
        $this->satuperdua = $satuperdua;
    }
    
    function luasTrapisium($panjangsisi, $tinggi){
        Echo "Luas Trapisium adalah : ". $this->satuperdua * $panjangsisi * $tinggi;
    }

    function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function hitung($pilihan, $panjangsisi, $tinggi)
    {
        switch ($pilihan) {
            case 'luas':
                $this->luasTrapisium($panjangsisi, $tinggi);
                break;
            default:
            $this->noChoice($panjangsisi, $tinggi);
        }
    }
}

$panjangsisi=20;
$tinggi=15;
$pilihan = new luasTrapisium;
$pilihan->hitung('luas',$panjangsisi, $tinggi);

?>