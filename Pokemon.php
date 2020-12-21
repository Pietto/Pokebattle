<?php

class Pokemon {
	protected static $pokemons = [];

	protected $name;
	protected $energyType;
	protected $hitpoints;
	protected $attack;
	protected $weakness;
	protected $resistance;

	public function __construct($name, $energyType, $hitpoints, $attack, $weakness, $resistance) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        array_push(self::$pokemons, $this);
    }

    function GetName() {
        return $this->name;
    }

    function GetEnergyType() {
        return $this->energyType;
    }

    function GetHealth() {
        return $this->health;
    }

    function GetAttackName($attackNumber){
        return $this->attack[$attackNumber]->GetName();
    }

    function GetAttackDamage($attackNumber){
        return $this->attack[$attackNumber]->GetPower();
    }

    function Attack($target, $attackNumber) {
        $target->damage($this->energytype, $this->attack[$attackNumber]->GetPower());
    }

    function damage($energytype, $damage) {
        $this->health -= $damage;
        if($this->health < 0) {
            $this->health = 0;
        }
    }

    // public function attack(Pokemon $target, Attack $attack) : void {
    // 	$power = $attack->power;
    // 	if($target->weakness == $attack->energyType)
    // 		{
    // 		$power = $power*2;
    // 	}
    // 	else if($target->Resistance == $attack->energyType)
    // 	{
    // 		$power = $power/2;
    // 	}
    // 	$target->health -= $power;
    // }

    public static function getPopulation(): array  {
        $livingPokemons = [];
        foreach(self::$pokemons as $Pokemon)
        {
            if($Pokemon->health > 0)
            {
                array_push($livingPokemons, $Pokemon->name);
            }
        }
        return $livingPokemons;
    }

    public static function getPopulationHealth() {
        $livingPokemons = [];
    	foreach(self::$pokemons as $Pokemon)
    	{
    		if($Pokemon->health > 0)
    		{
                array_push($livingPokemons, $Pokemon->health);
    		}
    	}
    	$total = array_sum($livingPokemons);
    	return $total/count($livingPokemons);
    }

	public function __toString() {
		return json_encode($this);
	}
}