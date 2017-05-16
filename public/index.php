<?php
/**
 * Created by PhpStorm.
 * User: florence
 * Date: 09/05/17
 * Time: 09:59
 */
require_once __DIR__."/../vendor/autoload.php";

$claptop = new wcs\Laptop("Core I7", "I6 GO");

$claptop ->setModel("Asus AP36");
$claptop->setWeight("2,5");
$claptop->display();

$nano = new \wcs\NanoComputer("Caore T3,", "2 GO");
$nano->setModel ("Rasberry 3");
$nano->setWeight("150");
$nano->display();

$laptop1 = new wcs\Laptop("Core T1", "3GO");
$laptop1->setModel("Country");
$laptop1->setWeight("2");
$laptop1->display();

$deskop = new wcs\Desktop("Core T3", "4 GO");
$deskop->setModel("blues");
$deskop->setBoxType("mini");
$deskop->display();

