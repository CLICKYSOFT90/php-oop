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

        $tv1->price = 5;
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

        echo " Total Price: ". $electronics_items->getTotalPrice(). "\n";
        echo " Sorting by Price: ";
        print_r($electronics_items->getSortedItemsByPrice()). "\n \n" ;

        echo " Sorting by Type: ";
        print_r($electronics_items->getSortedItemsByType() ). "\n \n";
    }
}
new Main();