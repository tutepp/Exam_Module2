<?php
namespace Models;
class Product
 {
    public $name;
    public $type;
    public $price;
    public $quantum;
    public $date;
    public $description;
    public function __construct($name,$type,$price,$quantum,$description)
    {
        $this->name= $name;
        $this->type = $type;
        $this->price = $price;
        $this->quantum = $quantum;
        $this->date = date("Y/m/d");
        $this->description = $description;
    }

}