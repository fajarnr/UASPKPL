<?php
class Bilangan
{
    function genap($bil)
    {
        if ($bil % 2 == 0) {
            return TRUE;
        }
    }
    function ganjil($bil)
    {
        if ($bil % 2 == 1) {
            return TRUE;
        }
    }


    function main($bil)
    {
        if ($this->genap($bil) == false) {
            return 'Bilangan '.$bil.' Adalah bilangan ganjil';
        }
            if ($this->ganjil($bil) == false) {
                return 'Bilangan '.$bil.' Adalah bilangan genap';
            }
            return 'Bilangan berhasil di cek ';
        
        }
    }

$authentikasi = new Bilangan;
$cek = $authentikasi->main('31');
echo $cek;