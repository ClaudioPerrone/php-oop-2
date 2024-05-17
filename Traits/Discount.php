<?php

trait Discount {
    private $discount = 0;

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getPriceAfterDiscount() {
        return $this->price - ($this->price * $this->discount / 100);
    }
}