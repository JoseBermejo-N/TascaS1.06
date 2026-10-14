<?php

class Triangle extends Shape {

    protected function getArea(): float {
        echo "Calculating area from method: " . __METHOD__ . "\n";
        return ($this->width * $this->height) / 2;
    }

    public function __toString(): string {
        return "Object of class " . __CLASS__ . " has ben created \n" .
               "Area of the triangle: " . $this->getArea() . "\n";
    }
}
