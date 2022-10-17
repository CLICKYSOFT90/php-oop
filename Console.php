<?php
/**
 * File: Console.php
 * 
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */

 /**
  * Console Class
  * 
  * @category Main
  * @package  OOP_PROJECT
  * @author   Khurram Nabeel <kn@clickysoft.com>
  * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
  * @link     http://www.symfony-project.org/
  */
class Console extends ElectronicItem
{
    private $_controller = array();
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->maxNumOfExtras = 4;
        $this->setExtras(count($this->_controller));
        $this->type = self::ELECTRONIC_ITEM_CONSOLE;
    }

    /**
     * Adds controller in console.
     * 
     * @param $item Controller
     * 
     * @return void
     */
    public function addController(Controller $item)
    {
        if ($item->getType() != self::ELECTRONIC_ITEM_CONTROLLER) {
            return;
        }
        array_push($this->_controller, $item);
        $this->setExtras(count($this->_controller));
    }
}
