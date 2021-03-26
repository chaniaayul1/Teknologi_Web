<?php 
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
interface Kandungan (){
    public function rasa();
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
    abstract public function Gold();
    abstract public function Premium($nama, $rasa);
    abstract public function Plain() : string;
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

?>