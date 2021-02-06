<?php
class Beli{
    public $ban = 4;
    public $warna = "Merah";
    public $tahun_produksi = 2020;
    public $merk = "Vios";
    public $harga = 312000000;

    function getBan(){
        return $this->ban;
    }
    function getWarna(){
        return $this->warna;
    }
    function getTahun_Produksi(){
        return $this->tahun_produksi;
    }
    function getMerk(){
        return $this->merk;
    }
    function getHarga(){
        return $this->Harga;
    }
    function getMaju(){
        return "Mobil vios Maju <br/>";
    }
    function getBerbelok(){
        return "Mobil vios berbelok sebelah kiri <br/>";
    }
    function getMundur(){
        return "Mobil vois Mundur karena ada lampu merah <br/>";
    }
}

class Mobil extends Beli {
    public $ban = 4;
    public $warna = "Merah";
    public $tahun_produksi = 2020;
    public $merk = "Vios";
    public $harga = 312000000;

    function getBan(){
        return $this->ban;
    }
    function getWarna(){
        return $this->warna;
    }
    function setWarna($warnaBaru){
        $this->warna=$warnaBaru;
    } 
    function getTahun_Produksi(){
        return $this->tahun_produksi;
    }
    function getMerk(){
        return $this->merk;
    }
    function setMerk($merkLain){
        $this->merk->$merkLain;
    }
    function getHarga(){
        return $this->Harga;
    }
}

$mobil = new Mobil;
echo $mobil->getMerk(). "<br/>";

$mobil->setMerk("ayla");
echo $mobil->getMerk(). "<br/>";

$mobil->seWarna("Hitam");
echo $mobil->getwarna(). "<br/>";

echo $mobil->getwarna(). "<br/>";

echo $mobil->getmerk(). "<br/>";

echo $mobil->getban(). "<br/>";

echo $mobil->gettahun_produksi(). "<br/>";

echo $mobil->getharga(). "<br/>";

?>