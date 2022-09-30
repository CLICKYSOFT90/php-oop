<?php

class ElectronicItems
{
    private $items;
    private $sorted;

    public function __construct()
    {
        $this->items = array();
        $this->sorted = array();
    }

    /**
     * @return array
     */
    public function getItems(){
        return $this->items;
    }

    /**
     * @return array
     */
    public function getSortedItemsByPrice()
    {
        $sorted_list = array();
        foreach($this->items as $item){
            $sorted_list[$item['price']] = $item;
        }
        return $sorted_list;
    }

    /**
     * @return bool
     */
    public function getSortedItemsByType()
    {
        $the_list = array();
        $sortedList = $this->items;
        foreach($sortedList as $index => $value){
            $the_list[$index] = $value['type'];
        }
        array_multisort($the_list, SORT_ASC, $sortedList);
        return $sortedList;
    }

    /**
     * @param $item
     * @return void
     */
    public function addItemToList($item){
        $theItem = [
            'item' => $item,
            'type' => $item->type,
            'price' => $item->price
        ];
        array_push($this->items, $theItem);
    }

    /**
     * @param $item
     * @param $extras
     * @param $extrasPrice
     * @return void
     */
    public function addItemToListWithExtras($item, $extras, $extrasPrice){
        $theItem = [
            'item' => $item,
            'type' => $item->type,
            'price' => $item->price,
            'extras' => [
                'extra' => $extras,
                'price' => $extrasPrice
            ],
        ];
        array_push($this->items, $theItem);
    }

    /**
     * @return float|int|mixed|void
     */
    public function getTotalPrice(){
        $price = 0;
        if(!$this->items || !is_array($this->items)){
            return;
        }
        foreach($this->items as $item){
            if(isset($item['price'])){
                $price += $item['price'];
            }
            if(isset($item['extras']) && isset($item['extras']['price'])){
                $extras_price = $item['extras']['price'];
                if(is_array($extras_price)){
                    $price += array_sum($extras_price);
                } else{
                    $price += $extras_price;
                }
            }
        }
        return $price;
    }
}