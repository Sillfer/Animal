<?php
class Bunny extends Animal
{
    private $owner;
    public function __construct($family, $food, $owner)
    {
        parent::__construct($family, $food);
        $this->owner = $owner;
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}
 