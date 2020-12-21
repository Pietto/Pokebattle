<?


class charmeleon extends pokemon {
    public function __construct()
	{
        $this->name = 'Charmeleon';
        $this->energyType = 'Fire';
        $this->hitpoints = 80;
        $this->health = $this->hitpoints;
        $this->attack = [new Attack('Head Butt', 10, 'Fire'), new Attack('Flare', 30, 'Fire')];
        $this->weakness = ['Water', 2];
        $this->resistance = ['Lightning', 10];

        self::$pokemons[] = $this;
    }
}


$charmeleon = new charmeleon(); 


?>