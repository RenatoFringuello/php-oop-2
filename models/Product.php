<?php

class Product
{
    protected $name;
    protected $yearOfProduction;
    protected $price;
    protected $barcode;
    protected $stock;

    //construct
    public function __construct(String $_name, Int $_year, float $_price, String $_barcode, int $_stock)
    {
        $this->setName($_name);
        $this->setYearOfProduction($_year);
        $this->setPrice($_price);
        $this->setBarcode($_barcode);
        $this->setStock($_stock);
    }

    //setters
    public function setName($_name)
    {
        if ($_name === '') {
            $_name = 'unknown';
        }
        $this->name = $_name;
    }

    public function setYearOfProduction($_year)
    {
        if (is_nan($_year)) {
            $_year = null;
        }
        $this->yearOfProduction = $_year;
    }

    public function setPrice($_price)
    {
        if (is_nan($_price)) {
            $_price = null;
        }
        $this->price = $_price;
    }

    public function setBarcode($_barcode)
    {
        if ($_barcode === '') {
            $_barcode = 'unknown';
        }
        $this->barcode = $_barcode;
    }

    public function setStock($_stock)
    {
        if (is_nan($_stock)) {
            $_stock = null;
        }
        $this->stock = $_stock;
    }

    //getters
    public function getName()
    {
        return $this->name;
    }

    public function getYearOfProduction()
    {
        return $this->yearOfProduction;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
