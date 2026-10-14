<?php


class Car {
    private string $brand;
    private string $model;
    private int $year;
    private float $price;

    public function __construct(string $brand, string $model, int $year, float $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    //sobrescritura del método mágico __toString
    public function __toString() {
        return "*** FICHA TECNICA DEL VEHÍCULO EN VENTA ***\n" .
               "Marca: " . $this->brand . "\n" .
               "Modelo: " . $this->model . "\n" .
               "Año: " . $this->year . "\n" .
               "Precio: " . $this->price . " €\n \n";
               
    }
}

