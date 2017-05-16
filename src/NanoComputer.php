<?php
/**
 * Created by PhpStorm.
 * User: florence
 * Date: 09/05/17
 * Time: 10:42
 */

namespace wcs;


class NanoComputer extends Computer implements MobileComputerInterface
{
    private  $weight;


    public function display()
    {
        parent:: display();
        echo "Weight : " . $this->getWeight() . " g" . PHP_EOL;
    }

    function setWeight($weight)
    {
        if ($weight < 50 or $weight > 1000) {
            throw new  \Exception("Le poids doit être compris entre 50 et 1000 gr");
        }
        $this->weight = $weight;
        return $this;
    }

    function getWeight()
    {
       return $this->weight;
    }


  }



