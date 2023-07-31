<?php


class BarangRumah {
    //properties
    protected $_nama;
    private $_kecepatan;
    public $_merk;

    public function __construct($nama, $kecepatan) {
        $this->_nama = $nama;
        $this->_kecepatan = $kecepatan;
    }

    public function __destruct() {
        echo "Object {$this->_nama} telah dihapus.";
    }
    // methods
    public function setNama($nama) {
        $this->_nama = $nama;
    }

    public function getNama() {
        return $this->_nama;
    }

    public function setkecepatan($kecepatan) {
        $this->_kecepatan = $kecepatan;
    }

    public function getKecepatan() {
        return $this->_kecepatan;
    }
    public function hidupkan() {
        echo "{$this->_nama} dihidupkan dengan kecepatan {$this->_kecepatan}.";
    }

    public function matikan() {
        echo "{$this->_nama} dimatikan.";
    }
    
    public function info() {
        return "Object: {$this->_nama}, Kecepatan: {$this->_kecepatan},";
    }
    
}

class motor extends BarangRumah {

    public function __construct($nama, $kecepatan) {
        parent::__construct($nama, $kecepatan);
    }
    
}
// instansiasi objek dari masing masing class
$motor = new motor("motor vario 125",3);

// set semua properti dari objeknya
$motor->setNama("motor honda vario 125");
$motor->setkecepatan("3");
$motor->_merk="honda vario 125";

// panggil method dari objeknya
$motor->hidupkan(); // Output:motor dihidupkan dengan kecepatan 105.
$motor->matikan(); // Output: motor dimatikan.