<?php
/**
 * Created by PhpStorm.
 * User: florence
 * Date: 09/05/17
 * Time: 11:46
 */

namespace wcs;


class Desktop extends  Computer implements  DeskotInterface
{
    private $boxType;

    public function __construct($proc, $memory)
    {
        parent::__construct($proc, $memory);
    }

    public function display()
    {
        parent::display();
        echo "box type : " .$this->getBoxType() .PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getBoxType()
    {
        return $this->boxType;
    }

    /**
     * @param mixed $boxType
     */
    public function setBoxType($boxType)
    {
        $this->boxType = $boxType;
    }

}