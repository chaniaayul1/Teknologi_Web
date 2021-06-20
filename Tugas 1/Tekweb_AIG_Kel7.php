<?php 

// Contoh implementasi class
class Hewan
{
	var $jenishewan;
	
	function Kucingtidur()
	{
		# code...
	}
}

// Contoh inheritance 
class Kucing extends Hewan
{
	// Contoh implementasi properti
	var $nama ;
	var $warna ;
	var $umur;
	var $jeniskelamin;
	
	// Contoh implementasi method // fungsi
	public function KucingLari($warnaBaru)
	{
		return "Runnnnnn";
	}

	public function SuaraKucing(){
		return "Meooowwwww";
	}

	// Constructor
	public function __construct($nama,$warna, $umur,$jeniskelamin){
		// Contoh implementasi penggunaan this keyword
		$this->nama = $nama;
		$this->warna = $warna;
		$this->umur = $umur;
		$this->jeniskelamin = $jeniskelamin;
	}

	// Destructor
	public function __destruct()
	{
		echo "Kucing telah tidur";
	}
}

echo "<br />=================================<br />";


// Kostruktor method untuk kelas Kucing
$Kucing_Chania = new Kucing("Monesta","Putih","5 tahun","laki-laki");


echo "Nama 			: ".$Kucing_Chania -> nama."<br />";
echo "Warna 		: ".$Kucing_Chania -> warna."<br />";
echo "Umur 			: ".$Kucing_Chania -> umur."<br />";
echo "Jenis Kelamin : ".$Kucing_Chania -> jeniskelamin."<br />";


 $Kucing_Chania -> __destruct();

echo "<br />=================================<br />";


// namespace

namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
$table->message();


//constans
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//self keyword
class Person {
	
	public static $name;
	
	
	public static function getName() {
		return self::$name;     // nahhh self keyword digunakan untk static methode
	}
}

// Import
use ArrayObject;

class Orang{
    const orang = "orang";

    function __construct() {
        print "Ini Awalnya\n";
    }  

    // Visibility
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
    // Parent Keyword
    function parentkeyword(){
        echo self::orang;
    }

}
    
class Tua extends Orang{
    const tua = "tua";

    // Function Overriding
    function printHello()
    {
        echo "Ini Orang Tua";
    }

    function parentkeyword(){
        echo parent::orang;
        echo self::tua;
    }

    function __construct() {
        parent::__construct();
        print "Ini Akhirnya\n";
    }
}

    // Polymorphism
interface Kandungan{
    function rasa($persen);
}

class Kawa implements Kandungan{
    private $persen;

    public function rasa($persen){
        return $this -> persen -> $persen / 100;
    }
} 

// Abstract Class
abstract class Jager {
    // Abstract Function
    abstract public function Gold();
    abstract public function Premium($nama, $rasa);
    abstract public function Plain() : string;
}

// Interface
interface Meister {
    public function Gold();
    public function Premium($nama, $rasa);
    public function Plain() : string;
  }

// Getter and Setter
class GetSet {
    private $kopi;
    private $cai;

    public function getFirstField() {
        return $this->kopi;
    }
    public function setFirstField($x) {
        $this->kopi = $x;
    }
    public function getSecondField() {
        return $this->cai;
    }
    public function setSecondField($x) {
        $this->cai = $x;
    }
}

// Type Check
$mer = "1";  // $mer merupakan (ASCII 49)
$mer *= 2;   // $mer merupakan sebuah  integer (2)
$mer = $foo * 1.3;  // $mer is now a float (2.6)
$mer = 5 * "10 Little Piggies"; // $mer merupakan integer (50)
$mer = 5 * "10 Small Pigs";     // $mer merupakan integer (50)

//Type Cast
$a    = 'car';
$a[0] = 'b';
echo $a;       // bar

class User {

    private $name;
  
    public function setName($givenName) {
       $this->name = $givenName;
    }
  
    public function getName() {
       return $this->name;
    }
  
  }
  
  // instansiasi
  $obj = new User;
  
  // setName() diisi oleh
  // argumen yaitu
  // sebuah object dari class
  // tanpa nama yang dibuat
  // mendadak (anonymous class)
  $obj->setName(new class {
  
    public function show($name) {
       return "Given name: " . $name;
    }
  
  });
  
  // method show() berasal dari
  // anonymous class dan
  // jika ini dijalankan akan keluar
  // Given name: Bagus
  echo $obj->getName()->show("Bagus");

  final class komputer{
    function lihat_spec(){
      return "Lihat Spesifikasi Komputer";
    }
 }
   
 class laptop extends komputer{
 }
   
 $laptop_baru=new laptop();
 // Fatal error: Class laptop may not inherit
 // from final class (komputer)

 class komputer{
    final public function lihat_spec(){
      return "Lihat Spesifikasi Komputer";
    }
 }
   
 class laptop extends komputer{
    public function lihat_spec(){
      return "Lihat Spesifikasi Laptop";
    }
 }
   
 $laptop_baru=new laptop();
 // Fatal error: Cannot override final method
 // komputer::lihat_spec()

 interface mouse{
    public function klik_kanan();
    public function klik_kiri();
 }
   
 interface mouse_gaming extends mouse{
    public function ubah_dpi();
 }
   
 class laptop implements mouse_gaming{
    public function klik_kanan(){
      return "Klik Kanan...";
    }
   
    public function klik_kiri(){
      return "Klik Kiri...";
    }
   
    public function ubah_dpi(){
      return "Ubah settingan DPI mouse";
    }
 }
   
 $laptop_baru = new laptop();
 echo $laptop_baru->ubah_dpi();
 // Ubah settingan DPI mouse

 class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "rewinding\n";
        reset($this->var);
    }
  
    public function current()
    {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }
  
    public function key() 
    {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }
  
    public function next() 
    {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }
  
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "valid: $var\n";
        return $var;
    }

}

$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    print "$a: $b\n";
}

// buat class laptop
class laptop {
    public $merk;
    public $pemilik;
  
    // static property
    public static $harga_beli;
   
    //static method
    public static function beli_laptop() {
      return "Beli Laptop";
    }
 }
   
 // set static property
 laptop::$harga_beli=4000000;
   
 // get static property
 echo "harga beli : Rp".laptop::$harga_beli;
   
 echo "<br />";
   
 // panggil static method
 echo laptop::beli_laptop();

 //Example with StdClass
$json = '{ "foo": "bar", "number": 42 }';
$stdInstance = json_decode($json);
echo $stdInstance->foo . PHP_EOL; //"bar"
echo $stdInstance->number . PHP_EOL; //42
//Example with associative array
$array = json_decode($json, true);
echo $array['foo'] . PHP_EOL; //"bar"
echo $array['number'] . PHP_EOL; //42

trait Ucapan
{
    public function salam() {
        return "Pagi....?";
    }
}

trait Selamat
{
    public function salam() {
        return "Assalamu'alaikum?";
    }
}

trait Sapaan
{
    public function salam() {
        return "Selamat pagi?";
    }
}

class Pesan
{
    // mengeliminasi method salam()
    // dari trait Ucapan dan Sapaan
    // mengguanakan insteadof
    use Ucapan, Selamat, Sapaan {
        Selamat::salam insteadof Ucapan, Sapaan;
    }
}

$pesan = new Pesan();
echo $pesan->salam();

class Mobil {
    public function bunyi() {
      return "BRUMM BRUMM!";
    }
  }
   
  class Sepeda extends Mobil {
      public function bunyi() { // Implementasi Override
      return "Beeb Beeb!";
    }
  }
   
 $kendaraan1 = new Sepeda();
 
 echo $kendaraan1->bunyi();

 trait ApaKabar
{
    public function apaKabar() {
        return "Apa kabar?";
    }
}

class Pesan
{
  // menggunakan use
  use ApaKabar;
}

$obj = new Pesan();
echo $obj->apaKabar();

// trait pertama
trait ApaKabar
{
    public function apaKabar() {
        // PHP_EOL adalah
        // garis baru (enter) lintas platform
        return "Apa kabar?" . PHP_EOL;
    }
}

// trait kedua
trait SelamatPagi
{
    public function selamatPagi() {
        return "Selamat pagi?";
    }
}

// trait ketiga,
trait KabarSelamat
{
    // tersusun dari kedua trait di atas
    use ApaKabar, SelamatPagi;
}

class Pesan
{
  // memakai trait yang
  // tersusun dari trait
  use KabarSelamat;
}

$obj = new Pesan();
echo $obj->apaKabar();
echo $obj->selamatPagi();
 ?>