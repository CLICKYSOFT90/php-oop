<?php

class Television extends ElectronicItem
{
    private $remoteController = 0;

    public function __construct()
    {
        $this->maxNumOfExtras = -1;
        $this->setExtras($this->remoteController);
        $this->type = self::ELECTRONIC_ITEM_TELEVISION;
    }

    /**
     * @return int
     */
    public function getRemoteController(){
        return $this->remoteController;
    }

    /**
     * @param $remoteController
     * @return void
     */
    public function setRemoteController($remoteController){
        $this->remoteController = $remoteController;
        $this->setExtras($this->remoteController);
    }
}