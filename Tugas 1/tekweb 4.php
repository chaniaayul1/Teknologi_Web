<?php
// generator
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $nilai) {
    echo "$nilai\n";
}


// exception
try {
    throw new Exception("An error occurred", 120);
  } catch(Exception $e) {
    echo "Error code: " . $e->getCode();
}



// / objek cloning

class SubObject
{
    static $instances = 0;
    public $instance;

    // contoh magic fuction
    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    //overloading dengan clone yang diatas
    function __clone()
    {
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

// comparing object
echo "bool2str($obj == $obj2)"


// convarience and contravarience
abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function speak();
}

class Dog extends Animal
{
    public function speak()
    {
        echo $this->name . " barks";
    }
}

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog 
    {
        return new Dog($name);
    }
}

$doggy = (new DogShelter)->adopt("Mavrick");
$doggy->speak();


//datetime
DateTime implements DateTimeInterface {
    /* Inherited constants */
    const string DateTimeInterface::ATOM = "Y-m-d\TH:i:sP" ;
    const string DateTimeInterface::COOKIE = "l, d-M-Y H:i:s T" ;
    const string DateTimeInterface::ISO8601 = "Y-m-d\TH:i:sO" ;
    const string DateTimeInterface::RFC822 = "D, d M y H:i:s O" ;
    const string DateTimeInterface::RFC850 = "l, d-M-y H:i:s T" ;
    const string DateTimeInterface::RFC1036 = "D, d M y H:i:s O" ;
    const string DateTimeInterface::RFC1123 = "D, d M Y H:i:s O" ;
    const string DateTimeInterface::RFC7231 = "D, d M Y H:i:s \G\M\T" ;
    const string DateTimeInterface::RFC2822 = "D, d M Y H:i:s O" ;
    const string DateTimeInterface::RFC3339 = "Y-m-d\TH:i:sP" ;
    const string DateTimeInterface::RFC3339_EXTENDED = "Y-m-d\TH:i:s.vP" ;
    const string DateTimeInterface::RSS = "D, d M Y H:i:s O" ;
    const string DateTimeInterface::W3C = "Y-m-d\TH:i:sP" ;
    /* Methods */
    public __construct ( string $datetime = "now" , DateTimeZone|null $timezone = null )
    public add ( DateInterval $interval ) : DateTime
    public static createFromFormat ( string $format , string $datetime , DateTimeZone|null $timezone = null ) : DateTime|false
    public static createFromImmutable ( DateTimeImmutable $object ) : DateTime
    public static createFromInterface ( DateTimeInterface $object ) : DateTime
    public static getLastErrors ( ) : array|false
    public modify ( string $modifier ) : DateTime|false
    public static __set_state ( array $array ) : DateTime
    public setDate ( int $year , int $month , int $day ) : DateTime
    public setISODate ( int $year , int $week , int $dayOfWeek = 1 ) : DateTime
    public setTime ( int $hour , int $minute , int $second = 0 , int $microsecond = 0 ) : DateTime
    public setTimestamp ( int $timestamp ) : DateTime
    public setTimezone ( DateTimeZone $timezone ) : DateTime
    public sub ( DateInterval $interval ) : DateTime
    public diff ( DateTimeInterface $targetObject , bool $absolute = false ) : DateInterval
    public format ( string $format ) : string
    public getOffset ( ) : int
    public getTimestamp ( ) : int
    public getTimezone ( ) : DateTimeZone|false
    public __wakeup ( ) : void
    }

//regular expression
$str = "hayuuu atuhhh aa";
$pattern = "/hayuuu/i";
echo preg_match($pattern, $str)

// reflection php class
class UUID {  

$reflection = new ReflectionClass(new User(‘silaingg’, new UUID(1234))); 

}


?>
