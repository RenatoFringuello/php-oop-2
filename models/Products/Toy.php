<?php
require_once __DIR__ . '/../Product.php';

class Toy extends Product{

    protected $material;
    protected Category $category;

    public function __construct(String $_name, Int $_year, float $_price, String $_barcode, int $_stock, string $_material, Category $_category){
        parent::__construct($_name, $_year, $_price, $_barcode, $_stock);
        $this->setMaterial($_material);
        $this->setCategory($_category);
    }

    //setters
    public function setMaterial($_material){
        $this->material = $_material;
    }
    public function setCategory($_category){
        $this->category = $_category;
    }
    
    //getters
    public function getMaterial(){
        return $this->material;
    }
    public function getCategory(){
        return $this->category;
    }
}