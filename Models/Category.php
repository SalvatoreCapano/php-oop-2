<?php 
class Category {
    public $category;

    public function __construct(string $_category)
    {
        if (($_category === 'dog') || ($_category === 'cat')) {
            $this->category = $_category;
        };
    }
}
?>