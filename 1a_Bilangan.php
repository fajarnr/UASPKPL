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
        if ($this->genap($bil) == TRUE) {
            if ($this->ganjil($bil) == TRUE) {
                    return 'bilanga anda : '.$bil;
                } else {
                    return 'Bilangan '.$bil.' Adalah bilangan genap';
                }
            } else {
                return 'Bilangan '.$bil.' Adalah bilangan ganjil';
            }
        }
    }

$authentikasi = new Bilangan;
$cek = $authentikasi->main('31');
echo $cek;