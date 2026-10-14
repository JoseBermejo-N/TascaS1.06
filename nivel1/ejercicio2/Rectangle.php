<?php

class Rectangle extends Shape {
   
    protected function getArea(): float {
        
        echo "Calculating area from method: " . __METHOD__ . "\n";
        return $this->width * $this->height;
    }

    public function __toString(): string {
        
        return "Object of class " . __CLASS__ . " has ben created \n" .
                "Area of the rectangle: " . $this->getArea() . "\n";
    }
}


