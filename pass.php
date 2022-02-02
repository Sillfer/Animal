<?php
require 'Animal.php';
require 'Bunny.php';
require 'Wolf.php';
$bunny  = new Bunny('Herbivore', 'Carrots', 'Mahdi');
$wolf = new Wolf('Carnivore', 'Meat');
echo '<b>Bunny Object</b> <br>';
echo 'The Bunny belongs to the ' . $bunny->get_family() . ' family and eats ' . $bunny->get_food() . ' and his owner is ' . $bunny->get_owner();
echo '<b><br>Wolf Object</b> <br>';
echo 'The Wolf belongs to the ' . $wolf->get_family() . ' family and eats ' . $wolf->get_food();
?>