<?php
/**
 * File: ElectronicItem.php
 * 
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <khurram.nabeel@gmail.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */

 /**
  * Class ElectronicItem
  * 
  * @category Main
  * @package  OOP_PROJECT
  * @author   Khurram Nabeel <khurram.nabeel@gmail.com>
  * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
  * @link     http://www.symfony-project.org/
  */
class ElectronicItem
{
    public $maxNumOfExtras;
    public $price;
    public $extras;
    public $type;

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';

    public static $types = [
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION,
        self::ELECTRONIC_ITEM_CONTROLLER,
    ];
    /**
     * Check if the electronic item reached the limit of extras.
     * 
     * @return bool
     */
    public function maxExtras()
    {
        if (($this->extras + 1) > $this->maxNumOfExtras) {
            return false;
        }
        return true;
    }

    /**
     * Sets extras
     * 
     * @param $extras Controller
     * 
     * @return void
     */
    public function setExtras($extras)
    {
        if ($this->maxExtras() && $extras > $this->maxNumOfExtras) {
            return;
        }
        $this->extras = $extras;
    }

    /**
     * Returns extras
     * 
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Get maximum number of extras
     * 
     * @return mixed
     */
    public function getMaxNumOfExtras()
    {
        return $this->maxNumOfExtras;
    }

    /**
     * Set Maximum number of extras
     * 
     * @param $maxNumberOfExtras int
     * 
     * @return void
     */
    public function setMaxNumOfExtras($maxNumberOfExtras)
    {
        $this->maxNumOfExtras = $maxNumberOfExtras;
    }

    /**
     * Gets Electronic item price.
     * 
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Gets Electronic item type.
     * 
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}
