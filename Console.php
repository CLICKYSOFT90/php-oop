<?php

class Console extends ElectronicItem
{
    private $controller = array();

    public function __construct()
    {
        $this->maxNumOfExtras = 4;
        $this->setExtras(count($this->controller));
        $this->type = self::ELECTRONIC_ITEM_CONSOLE;
    }

	/**
	 * @param Controller $item
	 * @return void
	 */
	public function addController(Controller $item){
		if ($item->getType() != self::ELECTRONIC_ITEM_CONTROLLER) {
			return;
		}
		array_push($this->controller, $item);
		$this->setExtras(count($this->controller));
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