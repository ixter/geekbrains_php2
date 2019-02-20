<?php
/**
 * Created by PhpStorm.
 * User: klass
 * Date: 20.02.2019
 * Time: 18:43
 */



class brand
{
    /*** определение свойств для brand***/
    public $name;
    public $description;
    public $price;

    function __construct($name, $description, $price){
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
    }

    function setName($name){
        $this->name = $name;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setPrice($price){
        $this->price = $price;
    }

    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }

    /*** открытые методы ***/
    public function showBrand(){
        echo `wonderfull`.$this->name.`<br/>`;
    }
    public function showDescription(){
        echo $this->description.`<br/>`;
    }
    public function showPrice(){
        echo `cost:`.$this->price.`<br/>`;
    }
    public function showData(){
        echo `brand`.$this->name.`<br/>`.`description`.$this->description.`<br/>`.`price`.$this->price.`<br/>`;
    }

}


