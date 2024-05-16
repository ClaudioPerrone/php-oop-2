<?php

    class Product {

        public $image;
        public $title;
        public $price;
        public $icon;
        public $type;

        public function __construct($_image, $_title, $_price, $_icon, $_type) {
            $this->image = $_image;
            $this->title = $_title;
            $this->price = $_price;
            $this->icon = $_icon;
            $this->type = $_type;
        }

        public function getProduct() {
            return  'Immagine: ' . $this->image . '<br>' .
                    'Titolo: ' . $this->title . '<br>' .
                    'Prezzo: ' . $this->price . '<br>' .
                    'Icona: ' . $this->icon . '<br>' .
                    'Tipologia: ' . $this->type . '<br>';
        }
    }

?>