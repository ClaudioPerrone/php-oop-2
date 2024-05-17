<?php

require_once __DIR__ . '/Product.php';

class Game extends Product {
    private $material;
    private $color;

    public function __construct($name, $image, $description, $price, $material, $color) {
        parent::__construct($name, $image, $description, $price);
        $this->material = $material;
        $this->color = $color;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSpecificDetails() {
        return "<p>Materiale: " . $this->getMaterial() . "</p>
                <p>Colore: " . $this->getColor() . "</p>";
    }
}
