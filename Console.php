<?php

class Console extends ElectronicItem
{
    private $remoteController = 0;
    private $wiredController = 0;

    public function __construct()
    {
        $this->maxNumOfExtras = 4;
        $totalExtras = $this->remoteController + $this->wiredController;
        $this->setExtras($totalExtras);
        $this->type = 'console';
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