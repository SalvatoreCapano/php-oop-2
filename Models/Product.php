<?php
class Product {
    public $name;
    public $price;
    public $quantity;
    public $category;
    public $imgUrl = 'https://picsum.photos/200/300';   //Per semplicita' uso immagini placeholder

    function __construct(string $_name, int $_price, int $_quantity, Category $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->category = $_category;
    }

    public function shodData() {

        echo '<h3>';
        echo $this->name;
        echo '</h3>';

        echo '<p>';
        echo 'Price: ' . $this->price . ' $';
        echo '</p>';

        echo '<p>';
        echo 'Quantity: ' . $this->quantity . ' pieces';
        echo '</p>';

        echo '<p>';
        echo 'Category: ' . $this->category->category;
        echo '</p>';
    }
}
?>