<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    private $size;
    private $material;

    public function __construct($name, $image, $description, $price, $size, $material) {
        parent::__construct($name, $image, $description, $price);
        $this->size = $size;
        $this->material = $material;
    }

    public function getSize() {
        return $this->size;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getSpecificDetails() {
        return "<p>Dimensione: " . $this->getSize() . "</p>
                <p>Materiale: " . $this->getMaterial() . "</p>";
    }
}
