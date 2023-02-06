<?php
require_once __DIR__ . '/../Product.php';
require_once __DIR__ . '/../Category.php';

class Food extends Product{

    protected $weightInGrams;
    protected $expiringDate;
    protected Category $category;
    
    public function __construct(String $_name, Int $_year, float $_price, String $_barcode, int $_stock, float $_weightInGrams, string $_expiringDate, Category $_category){
        parent::__construct($_name, $_year, $_price, $_barcode, $_stock);
        $this->setweightInGrams($_weightInGrams);
        $this->setExpiringDate($_expiringDate);
        $this->setCategory($_category);
    }

    //setters
    public function setWeightInGrams($_weightInGrams){
        $this->weightInGrams = $_weightInGrams;
    }
    
    public function setExpiringDate($_expiringDate){
        $this->expiringDate = $_expiringDate;
    }
    public function setCategory($_category){
        $this->category = $_category;
    }

    //getters
    public function getWeightInGrams(){
        return $this->weightInGrams;
    }
    
    public function getExpiringDate(){
        return $this->expiringDate;
    }
    public function getCategory(){
        return $this->category;
    }
}