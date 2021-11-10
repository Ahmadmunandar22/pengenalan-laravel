<?php
class orang {
    // property
    var $nama;
    var $asal;
    // constructor
    function __construct($namaOrang, $asalOrang) {
        echo "Construct otomatis dijalankan...<br>";
    $this->nama = $namaOrang;
    $this->asal = $asalOrang;
    }
    // destructor
    function __destruct() {
        echo "<br>Destruct dijalankan terakhir";
    }
    // method
    function kenalkan(){
        return "Haloo, aku " . $this->nama . " dari "
    . $this->asal;
}

}
$obj_orang = new orang("JongKoding","Jakarta");
echo $obj_orang->kenalkan();

//Enkapsulasi
//hak akses publik
?>
<?php
class human {
// property
public $nama;
public $asal;
// method
function kenalkan(){
return "</br>Haloo, aku JongKoding dari bandung";
}
}

// instansiasi dari class human
$obj_human = new human();
echo $obj_human->kenalkan();