<?php

class Pokemon
{
	public static $pokemons = [];

	private $name;
	private $energyType;
	private $hitpoints;
	private $attacks;
	private $weakness;
	private $resistance;

	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
	{
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        array_push(self::$pokemons, $this);
	}

    public function getProperty($param)
    {
        return $this->$param;
    }

    public function setProperty($property, $name)
    {
        $this->$property = $name;
        return $this->$property;
    }

	public function getAttack(string $name): Attack
	{
        foreach ($this->attacks as $attack)
        {
            if ($attack->name == $name)
            {
                return $attack;
            }
        }
        return null;
    }

    public function attack(Pokemon $target, Attack $attack) : void
    {
    	$power = $attack->power;
    	if($target->weakness == $attack->energyType)
    		{
    		$power = $power*2;
    	}
    	else if($target->Resistance == $attack->energyType)
    	{
    		$power = $power/2;
    	}
    	$target->health -= $power;
    }

    public static function getPopulation(): array
    {
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

    public static function getPopulationHealth()
    {
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

	public function __toString()
	{
		return json_encode($this);
	}
}

class ExtendedPokemon extends Pokemon
{
    
}