<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    private $expiry_date;
    private $ingredients;

    public function __construct($name, $image, $description, $price, $expiry_date, $ingredients) {
        parent::__construct($name, $image, $description, $price);
        $this->expiry_date = $expiry_date;
        $this->ingredients = $ingredients;
    }

    public function getExpiryDate() {
        return $this->expiry_date;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function getSpecificDetails() {
        return "<p>Data di scadenza: " . $this->getExpiryDate() . "</p>
                <p>Ingredienti: " . implode(', ', $this->getIngredients()) . "</p>";
    }
}
