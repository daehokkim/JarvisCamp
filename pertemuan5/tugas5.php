<?php
class kendaraan {
    public $jenis;    
    public $merk;    
    
    public function __construct($jenis, $merk){
        $this->jenis = $jenis;
        $this->merk = $merk;
    }
    public function gas() {
        echo "kendaraan berjalan";
    }
    public function rem() {
        echo "kendaraan berhenti";
    }

}
    class motor extends kendaraan{
        public $warna;
        public $tahun;

        public function __construct($jenis, $merk, $warna, $tahun){
            parent::__construct($jenis);
            parent::__construct($merk);
            $this->warna = $warna;       
            $this->tahun = $tahun;       
    }
    public function gas() {
        echo "kendaraan berjalan";
    }
    public function rem() {
        echo "kendaraan berhenti";
    }
}
    $xpander = new kendaraan("mobil","mitsubishi");

    $xpander->gas();
    $xpander->rem();

    $hrv = new kendaraan("mobil","honda");

    $hrv->gas();
    $hrv->rem();

    $beat = new motor("motor", "honda", "hitam", "2021");

    $beat->gas();
    $beat->rem();

    $vario = new motor("motor", "honda", "silver", "2022");

    $vario->gas();
    $vario->rem();

?>