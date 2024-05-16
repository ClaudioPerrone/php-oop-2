<?php

    require_once __DIR__ . '/Product.php';

    class CatProduct extends Product {

        public function __construct($_image, $_title, $_price, $_icon, $_type) {
            parent::__construct($_image, $_title, $_price, $_icon, $_type);
        }

    }

?>