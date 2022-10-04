<?php

class Television extends ElectronicItem
{
	private $controller = array();

	public function __construct()
	{
		$this->maxNumOfExtras = -1;
		$this->setExtras(count($this->controller));
		$this->type = self::ELECTRONIC_ITEM_TELEVISION;
	}

	/**
	 * @param Controller $item
	 * @return void
	 */
	public function addController(Controller $item)
	{
		if ($item->getType() != self::ELECTRONIC_ITEM_CONTROLLER) {
			return;
		}
		array_push($this->controller, $item);
		$this->setExtras(count($this->controller));
	}
}