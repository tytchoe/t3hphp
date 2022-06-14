<?php
class ConNguoi
{
    public $name = 'T3h';
    protected $age = 15;
    private $address = 'CG' ;

    public function showName()
    {
        return 'Hien thi ten';
    }

    protected function showAge()
    {

    }

    private  function showAddress()
    {

    }
}

$object = new ConNguoi();
echo $object->name;
echo '<pre>';
echo $object->showName();



?>