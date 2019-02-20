<?php
/**
 * Created by PhpStorm.
 * User: klass
 * Date: 20.02.2019
 * Time: 19:41
 */

class type extends brand
{
    /*** определение свойств для type***/
    public $type;
    public $weight;

    function __construct($type, $weight){
        $this->setType($type);
        $this->setWeight($weight);
    }

    function setType($type){
        $this->type = $type;
    }
    function setWeight($weight){
        $this->weight = $weight;
    }

    function getType(){
        return $this->type;
    }
    function getWeight(){
        return $this->weight;
    }


    /*** открытые методы ***/
    public function showType(){
        echo $this->type.`<br/>`;
    }
    public function showWheight(){
        echo $this->weight.`<br/>`;
    }
    public function showDataWithType(){
        echo `brand`.$this->name.`<br/>`.`description`.$this->description.`<br/>`.`price`.$this->price.`<br/>`.`type`.$this->price.`<br/>`;
    }

}