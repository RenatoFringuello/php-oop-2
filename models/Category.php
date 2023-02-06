<?php
class Category{
    protected $name;
    protected $icon;

    public function __construct(string $_name, string $_icon){
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    //setters
    public function setName($_name){
        $this->name = $_name;
    }
    public function setIcon($_icon){
        $this->icon = $_icon;
    }

    //getters
    public function getName(){
        return $this->name;
    }
    public function getIcon(){
        return $this->icon;
    }
}