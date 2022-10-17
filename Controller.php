<?php

/**
 * File: Controller.php
 * 
 * @category Main
 * @package  OPP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (https://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */

/**
 * Class Controller
 * 
 * @category Main
 * @package  OPP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (https://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */
class Controller extends ElectronicItem
{
    private $_wired;
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->maxNumOfExtras = 0;
        $this->setExtras(0);
        $this->type = self::ELECTRONIC_ITEM_CONTROLLER;
        $this->_wired = 0;
    }

    /**
     * Returns wired.
     * 
     * @return bool
     */
    public function getWired()
    {
        return $this->_wired;
    }

    /**
     * Sets wired.
     * 
     * @param $wired bool
     * 
     * @return void
     */
    public function setWired(bool $wired)
    {
        $this->_wired = $wired;
    }
}
