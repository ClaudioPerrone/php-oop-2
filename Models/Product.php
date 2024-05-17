<?php

require_once __DIR__ . '/../Traits/Discount.php';

class Product {
    use Discount;

    private $name;
    private $image;
    private $description;
    protected $price;

    public function __construct($name, $image, $description, $price) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    // Metodi specifici per i sottotipi, di default vuoti
    public function getSpecificDetails() {
        return '';
    }
}
