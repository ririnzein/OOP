<?php
class Mobil{
    public $merk;
    public $warna;
    public $tahun_produksi;
    public function __construct($merk, $warna, $tahun_produksi){
        $this->merk             = $merk;
        $this->warna            = $warna;
        $this->tahun_prosuksi   = $tahun_produksi;
    }
    public function Penjelasan(){
        echo "warna yang dimiliki mobil adalah {$this->warna} dan 
            jumlah ban mobil {$this->ban} 
            serta mobil ini di produksi pada tahun {$this->tahun_produksi}.";
    }
}
class VIOS extends mobil{
    public $harga;
    public $ban;
    public function __construct($merk, $warna, $tahun_produksi, $harga, $ban, $maju, $berbelok, $mundur){
        $this->merk             = $merk;
        $this->warna            = $warna;
        $this->tahun_produksi   = $tahun_produksi;
        $this->harga            = $harga;
        $this->ban              = $ban;
        $this->maju             = $maju;
        $this->berbelok         = $berbelok;
        $this->mundur           = $mundur;
       
    }
    public function Penjelasan(){
        echo "Merk Mobil ini adalah {$this->merk} 
            dengan warna mobil {$this->warna} 
            dan di produksi pada tahun {$this->tahun_produksi} 
            harga mobil ini adalah  {$this->harga} 
            serta merk ban pada mobil adalah {$this->ban}
            dengan itu mobil ini memiliki kecepatan maju yang sangat baik {$this->maju},
            dan {$this->berbelok},
            serta {$this->mundur}."; 
    }
}

$VIOS = new VIOS("VIOS", "Merah", "2019", "312 Juta", "Michelin Pilot", "maju", "berbelok", "mundur");
$VIOS->Penjelasan();


echo "<br/>";
echo "<br/>";

    class LAMBORGHINI extends mobil{
        public $bahan_bakar;
        public function __construct($merk, $warna, $tahun_produksi, $harga, $ban, $bahan_bakar, $maju, $berbelok, $mundur){
            $this->merk             = $merk;
            $this->warna            = $warna;
            $this->tahun_produksi   = $tahun_produksi;
            $this->harga            = $harga;
            $this->ban              = $ban;
            $this->bahan_bakar      = $bahan_bakar;
            $this->maju             = $maju;
            $this->berbelok         = $berbelok;
            $this->mundur           = $mundur;
        }
        public function Penjelasan(){
            echo "Merk Mobil ini adalah {$this->merk} 
                dengan warna mobil {$this->warna} 
                dan di produksi pada tahun {$this->tahun_produksi} 
                harga mobil ini adalah  {$this->harga} 
                serta merk ban pada mobil adalah {$this->ban}
                bahan bakar mobil ini adalah {$this->bahan_bakar}
                dengan itu mobil ini memiliki kecepatan maju yang sangat baik {$this->maju},
                dan {$this->berbelok},
                serta {$this->mundur}."; 
        }
    }
    $LAMBORGHINI = new LAMBORGHINI ("LAMBORGHINI", "Merah Hitam", "2020", "9 Milyar", "Potenza", "bensin", "maju", "berbelok", "mundur");
    $LAMBORGHINI->Penjelasan();
?>
