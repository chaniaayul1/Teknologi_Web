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



 ?>