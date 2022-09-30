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
        $sorted_list = $this->items;
        for($i=0; $i < count($sorted_list); $i++){
            for($j=0; $j < count($sorted_list) - 1; $j++){
                if($sorted_list[$j]['price'] < $sorted_list[$j+1]['price'] ){
                    $temp = $sorted_list[$j];
                    $sorted_list[$j] = $sorted_list[$j+1];
                    $sorted_list[$j+1] = $temp;
                }
            }
        }
        return $sorted_list;
    }

    /**
     * @return bool
     */
    public function getSortedItemsByType()
    {
        $sortedList = $this->items;
        for ($i=0; $i < count($sortedList); $i++)
        {
            for ($j=0; $j < count($sortedList) -1; $j++)
            {
                if (strcmp($sortedList[$j]['type'], $sortedList[$j+1]['type']) > 0)
                {
                    $temp =  $sortedList[$j];
                    $sortedList[$j] = $sortedList[$j+1];
                    $sortedList[$j+1] =  $temp;
                }
            }
        }
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