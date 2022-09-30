<?php

class Console extends ElectronicItem
{
    private $remoteController = 2;
    private $wiredController = 2;

    public function __construct()
    {
        $this->maxNumOfExtras = 4;
        $totalExtras = $this->remoteController + $this->wiredController;
        $this->setExtras($totalExtras);
        $this->type = self::ELECTRONIC_ITEM_CONSOLE;
    }

    /**
     * @return int
     */
    public function getRemoteController()
    {
        return $this->remoteController;
    }

    /**
     * @param $remoteController
     * @return void
     */
    public function setRemoteController($remoteController)
    {
        $this->remoteController = $remoteController;
    }

    /**
     * @return int
     */
    public function getWiredController()
    {
        return $this->wiredController;
    }

    /**
     * @param $remoteController
     * @return void
     */
    public function setWiredController($wiredController)
    {
        $this->wiredController = $wiredController;
        $totalExtras = $this->remoteController + $this->wiredController;
        $this->setExtras($totalExtras);
    }
}