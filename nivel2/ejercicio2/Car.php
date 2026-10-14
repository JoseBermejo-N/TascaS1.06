<?php


require_once "Turbo.php";

class Car {
    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $maxSpeed;

    //usamos el trait
    use Turbo;

    
    public function __construct(string $brand, string $licensePlate, string $fuelType, int $maxSpeed) {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }

    
    public function accelerate(): void {
        echo "El coche con matrícula {$this->licensePlate} està acelerando...\n";
        
        //llamamos al metodo incluido en el Trait.
        $this->boost(); 
        
        echo "Velocidad máxima de {$this->maxSpeed} km/h alcanzada!\n";
    }
}

