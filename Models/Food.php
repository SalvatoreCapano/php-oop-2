<?php
require_once __DIR__.'/Product.php';
require_once __DIR__.'../../Traits/type.php';

class Food extends Product {
    public $weight;
    public $portions;
    public $proteins;
    public $fat;
    Use Type;

    function __construct($_name, $_price, $_quantity, $_category, $_weight, $_portions, $_proteins, $_fat) {

        parent::__construct($_name, $_price, $_quantity, $_category);

        $this->weight = $_weight;
        $this->portions = $_portions;
        $this->proteins = $_proteins;
        $this->fat = $_fat;
        $this->type = 'Food';
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
        echo 'Weight: ' . $this->weight;
        echo '</p>';

        echo '<p>';
        echo 'Portions: ' . $this->portions;
        echo '</p>';

        echo '<p>';
        echo 'Proteins: ' . $this->proteins . ' g';
        echo '</p>';

        echo '<p>';
        echo 'Fat: ' . $this->fat . ' g';
        echo '</p>';
    }
}
?>