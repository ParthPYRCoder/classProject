<?php

class doCal
{
    public $n1;
    public $n2;
    public $result;

    function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    function add()
    {
        $this->result = $this->n1 *  $this->n2;
    }
}


$doCal = new doCal(10, 20);
$doCal->add();
echo $doCal->result;
