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

	public function GetName() {
        return $this->name;
    }
    public function GetPower() {
        return $this->power;
    }
    public function GetType() {
        return $this->type;
    }
    public function __toString() {
        return json_encode($this);
    }
}