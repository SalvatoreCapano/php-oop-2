<?php
class Product {
    public $name;
    public $price;
    public $quantity;
    public $category;
    public $imgUrl = 'https://picsum.photos/200/300';   //Per semplicita' uso immagini placeholder

    function __construct(string $_name, int $_price, int $_quantity, Category $_category) {
        
        if ($_price <= 0) {
                throw new Exception('Price must be equal or greater than zero!');
        }

        try {
            $this->price = $_price;
        } 
        catch (Exception $e) {
            echo 'Errore: ' . $e->getMessage();
        }
        
        $this->name = $_name;
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