<?

class Attack {
	public $name;
	public $energyType;
	public $power;


	public function __construct($name, $power, $energyType){
		$this->name = $name;
		$this->energyType = $energyType;
		$this->power = $power;
	}

	public function __toString()
	{
		return json_encode($this);
	}

}