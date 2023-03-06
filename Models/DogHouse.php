<?php
require_once __DIR__.'/Product.php';

class DogHouse extends Product {
    public $width;
    public $height;
    public $color;
    public $material;
    public $type;

    function __construct($_name, $_price, $_quantity, $_category, $_width, $_height, $_color, $_material) {

        parent::__construct($_name, $_price, $_quantity, $_category);

        $this->width = $_width;
        $this->height = $_height;
        $this->color = $_color;
        $this->material = $_material;
        $this->type = 'DogHouse';
    }

    public function shodData() {

        echo '<h3>';
        echo $this->name;
        echo '</h3>';

        echo '<p>';
        echo 'Type: ' . $this->type;
        echo '</p>';

        echo '<p>';
        echo 'Price: ' . $this->price . ' $';
        echo '</p>';

        echo '<p>';
        echo 'Quantity: ' . $this->quantity . ' pieces';
        echo '</p>';

        echo '<p>';
        echo 'Category: ' . $this->category->category;
        echo '</p>';

        echo '<p>';
        echo 'Width: ' . $this->width . ' cm';
        echo '</p>';
        
        echo '<p>';
        echo 'Height: ' . $this->height . ' cm';
        echo '</p>';

        echo '<p>';
        echo 'Color: ' . $this->color;
        echo '</p>';


        echo '<p>';
        echo 'Material: ' . $this->material;
        echo '</p>';
    }
}
?>