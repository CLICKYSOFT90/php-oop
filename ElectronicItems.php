<?php
/**
 * File: ElectronicItems.php
 * 
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */

 /**
  * Class ElectronicItems
  *
  * @category Main
  * @package  OOP_PROJECT
  * @author   Khurram Nabeel <kn@clickysoft.com>
  * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
  * @link     http://www.symfony-project.org/
  */
class ElectronicItems
{
    private $_items;
    private $_sorted;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->_items = array();
        $this->_sorted = array();
    }

    /**
     * Returns items
     * 
     * @return array
     */
    public function getItems()
    {
        return $this->_items;
    }

    /**
     * Returns sorted items list by price
     * 
     * @return array
     */
    public function getSortedItemsByPrice()
    {
        $sorted_list = $this->_items;
        for ($i = 0; $i < count($sorted_list); $i++) {
            for ($j = 0; $j < count($sorted_list) - 1; $j++) {
                if ($sorted_list[$j]['price'] < $sorted_list[$j + 1]['price']) {
                    $temp = $sorted_list[$j];
                    $sorted_list[$j] = $sorted_list[$j + 1];
                    $sorted_list[$j + 1] = $temp;
                }
            }
        }
        return $sorted_list;
    }

    /**
     * Returns sorted items by type
     * 
     * @return array
     */
    public function getSortedItemsByType()
    {
        $sortedList = $this->_items;
        for ($i = 0; $i < count($sortedList); $i++) {
            for ($j = 0; $j < count($sortedList) - 1; $j++) {
                if (strcmp($sortedList[$j]['type'], $sortedList[$j + 1]['type']) > 0) {
                    $temp =  $sortedList[$j];
                    $sortedList[$j] = $sortedList[$j + 1];
                    $sortedList[$j + 1] =  $temp;
                }
            }
        }
        return $sortedList;
    }

    /**
     * Adds item to list
     * 
     * @param $item Controller
     * 
     * @return void
     */
    public function addItemToList($item)
    {
        $theItem = [
            'item' => $item,
            'type' => $item->type,
            'price' => $item->price
        ];
        array_push($this->_items, $theItem);
    }

    /**
     * Adds item to list with extras
     * 
     * @param $item        Controller
     * @param $extras      Controller
     * @param $extrasPrice float
     * 
     * @return void
     */
    public function addItemToListWithExtras($item, $extras, $extrasPrice)
    {
        $theItem = [
            'item' => $item,
            'type' => $item->type,
            'price' => $item->price,
            'extras' => [
                'extra' => $extras,
                'price' => $extrasPrice
            ],
        ];
        array_push($this->_items, $theItem);
    }

    /**
     * Returns total price.
     * 
     * @return float|int|mixed|void
     */
    public function getTotalPrice()
    {
        $price = 0;
        if (!$this->_items || !is_array($this->_items)) {
            return;
        }
        foreach ($this->_items as $item) {
            if (isset($item['price'])) {
                $price += $item['price'];
            }
            if (isset($item['extras']) && isset($item['extras']['price'])) {
                $extras_price = $item['extras']['price'];
                if (is_array($extras_price)) {
                    $price += array_sum($extras_price);
                } else {
                    $price += $extras_price;
                }
            }
        }
        return $price;
    }
}
