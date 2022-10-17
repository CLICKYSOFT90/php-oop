<?php
/**
 * File: Microwave.php
 * 
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */

 /**
  * Class Microwave
  * 
  * @category Main
  * @package  OOP_PROJECT
  * @author   Khurram Nabeel <kn@clickysoft.com>
  * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
  * @link     http://www.symfony-project.org/
  */
class Microwave extends ElectronicItem
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->maxNumOfExtras = 0;
        $this->setExtras(0);
        $this->type = self::ELECTRONIC_ITEM_MICROWAVE;
    }
}
