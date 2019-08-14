<?php

class Person 
{
    //private -- use underscore  (_name)
    //this refers to this private variable in this class.
    // -> is the dot in php
    //constructer: _firstname is for your private declared variable at the top.
        //second firstname is in the paramerters.

    private $_name;
    private $_age;

    public function setName($value)
    {
        $this->_age = $value;
    }

    public function getAge()
    {
        $this->_age = $value;
    }

    public function getValues()
    {
        return "{$this->_name} is {$this ->_age} years old...";
    }

    public function __get($property)
    {
        
    }

}

?>
