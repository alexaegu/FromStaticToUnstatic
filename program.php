<?php

/* Возможное решение этой задачи заключается в следующем. Поскольку переменная принадлежит объекту, а не классу, то создадим объект этого класса внутри статической функции, а затем с помощью этого объекта получим доступ к переменной */

class AnyClass
{
    private $anyVariable;
    
    public function __construct()
    {
        $this->anyVariable = 5;
    }
    
    public static function anyFunction()
    {
        $object = new AnyClass();
        return $object->anyVariable;
    }
}

echo AnyClass::anyFunction();
