<?php
class Gato extends Animal
{

    public  $nombre;
    public function __construct($nombre)
    {

        $this->nombre=$nombre;

    }
     
    public function roar()
    {
        echo $this->nombre." miaguea, Miau";
    }

}
?>

