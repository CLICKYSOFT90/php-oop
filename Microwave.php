<?php

class Microwave extends ElectronicItem
{
    public function __construct()
    {
        $this->maxNumOfExtras = 0;
        $this->setExtras(0);
        $this->type = 'microwave';
    }
}