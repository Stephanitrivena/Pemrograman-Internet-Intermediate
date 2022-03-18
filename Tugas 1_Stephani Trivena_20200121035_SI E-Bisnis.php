<?php

class pendinginudara  {
    public  $tipe,
            $merk,
            $buatan,
            $ukuran,
            $harga;

    public function nyalakanpendinginudara() {

    }

    public function matikanpendinginudara() {

    }
    
    public function mendinginkanudara() {

    }

    public function memfilterudara() {

    }

    public function kisiotomatis() {

    }

    public function penstabillistrik() {

    }

}

class pendinginudarastandingfloor extends pendinginudara {
    public $modeautolouver = false;
    public $modepembersihotomatis = false;

    public function nyalakanmodeautolover(){
        $this->modeautolouver = true;
        return "mode auto louver dinyalakan, louver bergerak otomatis!";
    }

    public function nyalakanmodepembersihotomatis(){
        $this-> modepembersihotomatis= true;
        return "mode pembersih otomatis dinyalakan, filter unit indoor dibersihkan!";
    }
}

class pendinginudarainverter extends pendinginudara {
    public $modehemat = false;
    public $modeturbo = false;

    public function nyalakanmodehemat(){
        $this->modehemat = true;
        return "mode hemat dihidupkan, aliran listrik distablikan!";
    }

    public function nyalakanmodeturbo(){
        $this->modeturbo = true;
        return "mode turbo dinyalakan,pendinginan bekerja double !";
    }
}

$pendinginudara1 = new pendinginudarastandingfloor();
echo $pendinginudara1->kisiotomatis();
echo "<br>";
echo $pendinginudara1->nyalakanmodeautolover();
echo "<br>";
echo $pendinginudara1->memfilterudara();
echo "<br>";
echo $pendinginudara1->nyalakanmodepembersihotomatis();
echo "<br>";
$pendinginudara2 = new pendinginudarainverter();
echo $pendinginudara2 ->penstabillistrik();
echo "<br>";
echo $pendinginudara2 ->nyalakanmodehemat();
echo "<br>";
echo $pendinginudara2 ->mendinginkanudara();
echo "<br>";
echo $pendinginudara2 ->nyalakanmodeturbo();

echo "<br>";

class handphone  {
    public  $merk,
            $tipe,
            $warna,
            $ram,
            $kamera;

    public function nyalakanhandphone() {

    }

    public function matikanhandphone() {

    }
    
    public function hematbaterai() {

    }

    public function historyaplikasi() {

    }

    public function klipsingkatgambar() {

    }

    public function berbagiotomatis() {

    }

}

class handphoneandroid extends handphone {
    public $modedoze = false;
    public $closeallapps = false;

    public function nyalakanmodedoze(){
        $this->modedoze = true;
        return "mode doze dinyalakan, menghemat baterai saat handset dalam keadaan siaga !";
    }

    public function nyalakancloseallapps(){
        $this->closeallapps = true;
        return "close all apps dipilih, menutup semua history aplikasi yang dibuka dengan sekali tap!";
    }
}

class handphoneios extends handphone {
    public $livephotos = false;
    public $airdrop = false;

    public function livephotoshidup(){
        $this->livephotos = true;
        return "livephotos dihidupkan, membuat gambar menjadi klip singkat!";
    }

    public function nyalakanairdrop(){
        $this->airdrop = true;
        return "airdrop dinyalakan, dapat otomatis berbagi file antar ios!";
    }
}

$handphone1 = new handphoneandroid();
echo $handphone1->hematbaterai();
echo "<br>";
echo $handphone1->nyalakanmodedoze();
echo "<br>";
echo $handphone1->historyaplikasi();
echo "<br>";
echo $handphone1->nyalakancloseallapps();
echo "<br>";
$handphone2 = new handphoneios();
echo $handphone2->klipsingkatgambar();
echo "<br>";
echo $handphone2->livephotoshidup();
echo "<br>";
echo $handphone2->berbagiotomatis();
echo "<br>";
echo $handphone2->nyalakanairdrop();
?>