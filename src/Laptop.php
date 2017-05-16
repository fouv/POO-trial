<?php
/**
 * Created by PhpStorm.
 * User: florence
 * Date: 09/05/17
 * Time: 10:14
 */

namespace wcs;


class Laptop extends Computer implements MobileComputerInterface
{
    private $weight;

    public function __construct($proc, $memory)
{
    parent::__construct($proc, $memory);
}
    public function display()
    {
        parent::display();
        echo "Weight : ". $this->getWeight() . "kg" .PHP_EOL;
    }

    function setWeight($weight)
    {
        if ($weight < 1 or $weight > 3) {
            throw new  \Exception("Le poids doit être compris entre 1kg et 3kg");
        }
        $this->weight = $weight;
        return $this;
    }

    function getWeight()
    {
        return $this->weight;
    }
}