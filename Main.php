<?php
require './ElectronicItem.php';
require './ElectronicItems.php';
require './Television.php';
require './Console.php';
require './Microwave.php';
require './Controller.php';

class Main
{
    public function __construct()
    {
        $this->main();
    }
    public function main(){
        $tv1 = new Television();
        $tv2 = new Television();

//        TV 1 has 2 remote controller
        $tv1->setRemoteController(2);
//        TV 2 has 1 remote controller
        $tv2->setRemoteController(1);

        $tv1->price = 20;
        $tv2->price = 10;

        $console = new Console();

//        console has 2 remote controller and 2 wired controllers
        $console->setRemoteController(2);
        $console->setWiredController(2);
        $console->price = 15;

        $electronics_items = new ElectronicItems();
        $electronics_items->addItemToList($tv1);
        $electronics_items->addItemToList($tv2);
        $electronics_items->addItemToList($console);

        echo "TV1 Price\t\t:\t" . $tv1->price . "\n";
        echo "TV2 Price\t\t:\t" . $tv2->price . "\n";
        echo "Console Price\t:\t" . $console->price . "\n";
        echo "Total Price\t\t:\t". $electronics_items->getTotalPrice(). "\n";
        echo "==================================================\n";

        echo "Item List: \n";
        echo str_pad( "TYPE", 20 ) ."\t\t". str_pad("EXTRAS", 20) ."\t\tPRICE\n";
        foreach($electronics_items->getItems() as $item){
            echo str_pad( $item['type'], 20 ) . "\t\t". str_pad($item['item']->extras . ' controllers', 20) . "\t\t" . '$'. $item['price'] . "\n";
        }
        echo "\n--------------------------------------------------\n";

        echo "Sorting by Price: \n";
        $sortedItemByPrice = $electronics_items->getSortedItemsByPrice();
        echo str_pad( "TYPE", 20 ) ."\t\t". str_pad("EXTRAS", 20) ."\t\tPRICE\n";
        foreach($sortedItemByPrice as $item){
            echo str_pad( $item['type'], 20 ) . "\t\t". str_pad($item['item']->extras . ' controllers', 20) . "\t\t" . '$'. $item['price'] . "\n";
        }
        echo "\n--------------------------------------------------\n";
        echo "Sorting by Type: \n";
        $sortedItemByType = $electronics_items->getSortedItemsByType();
        echo str_pad( "TYPE", 20 ) ."\t\t". str_pad("EXTRAS", 20) ."\t\tPRICE\n";
        foreach($sortedItemByType as $item){
            echo str_pad( $item['type'], 20 ) . "\t\t". str_pad($item['item']->extras . ' controllers', 20) . "\t\t" . '$'. $item['price'] . "\n";
        }
        echo "\n--------------------------------------------------\n";
    }
}
new Main();