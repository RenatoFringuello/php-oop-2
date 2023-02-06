<?php
require_once __DIR__ . '/../Product.php';

class Kennel extends Product{

    protected $material;
    protected $height;
    protected $width;
    protected $waterproof;
    protected Category $category;
    
    public function __construct(String $_name, Int $_year, float $_price, String $_barcode, int $_stock, string $_material, float $_height, float $_width, bool $_waterproof, Category $_category){
        parent::__construct($_name, $_year, $_price, $_barcode, $_stock);
        $this->setMaterial($_material);
        $this->setHeight($_height);
        $this->setWidth($_width);
        $this->setWaterproof($_waterproof);
        $this->setCategory($_category);
    }

    //setters
    public function setMaterial($_material){
        $this->material = $_material;
    }
    public function setHeight($_height){
        $this->height = $_height;
    }
    public function setWidth($_width){
        $this->width = $_width;
    }
    public function setWaterproof($_waterproof){
        $this->waterproof = $_waterproof;
    }
    public function setCategory($_category){
        $this->category = $_category;
    }
    
    //getters
    public function getMaterial(){
        return $this->material;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getWaterproof(){
        return ($this->waterproof) ? 'Waterproof' : 'si bagna';
    }
    public function getCategory(){
        return $this->category;
    }
}