<?php
class Perro extends Animal
{
    public  $nombre;
    public function __construct($nombre)
    {

        $this->nombre=$nombre;

    }
     
    public function roar()
    {
        echo $this->nombre." ladra, wof";
    }

}
?>

