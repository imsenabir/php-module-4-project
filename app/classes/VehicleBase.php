<?php

// VehicleBase class to define the base structure for vehicles
abstract class VehicleBase {
    protected $name;
    protected $type;
    protected $price;
    protected $image;


    // Constructor to initialize vehicle properties
    public function __construct($name, $type, $price, $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }


    // Abstract method to get vehicle details
    abstract public function getDetails();
}
