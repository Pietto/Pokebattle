<?


class pikachu extends pokemon {
    public function __construct()
	{
        $this->name = 'Pikachu';
        $this->energyType = 'Lightning';
        $this->hitpoints = 60;
        $this->health = $this->hitpoints;
        $this->attack = [new Attack('Electric Ring', 50, 'Lightning'), new Attack('Pika Punch', 20, 'Lightning')];
        $this->weakness = ['Fire', 1.5];
        $this->resistance = ['Fighting', 20];

        self::$pokemons[] = $this;
    }
}


$pikachu = new pikachu(); 


?>