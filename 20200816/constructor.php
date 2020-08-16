<?php
//6-7

class Super
{
    private $data;

    public function getData()
    {
        return $this->data;
    }

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class Sub extends Super
{
    private $param;

    public function getParam()
    {
        return $this->param;
    }

    public function __construct($data, $param)
    {
        $this->data = $data;
        $this->param = $param;
    }
}

$obj = new Sub('Red', 'Blue');
print 'Data:' . $obj->getData() . '\n';
print 'Param:' . $obj->getParam();
