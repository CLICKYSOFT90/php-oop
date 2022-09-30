<?php

class Controller extends ElectronicItem
{
    private $wired;
    public function __construct()
    {
        $this->maxNumOfExtras = 0;
        $this->setExtras(0);
        $this->type = self::ELECTRONIC_ITEM_CONTROLLER;
        $this->wired = 0;
    }

    /**
     * @return void
     */
    public function getWired(){
        $this->wired;
    }

    /**
     * @param $wired
     * @return void
     */
    public function setWired($wired){
        $this->wired = $wired;
    }
}