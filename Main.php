<?php
/**
 * File: Main.php
 *
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */
require './ElectronicItem.php';
require './ElectronicItems.php';
require './Microwave.php';
require './Controller.php';
require './Television.php';
require './Console.php';
/**
 * Main Class
 * 
 * @category Main
 * @package  OOP_PROJECT
 * @author   Khurram Nabeel <kn@clickysoft.com>
 * @license  GPL Version 3.0 (http://www.gnu.org/licenses/gpl)
 * @link     http://www.symfony-project.org/
 */
class Main
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->main();
    }
    /**
     * Main Function
     * 
     * @return void
     */
    public function main()
    {
        $tv1 = new Television();
        $tv2 = new Television();
        $controller1 = new Controller();
        $controller1->setWired(0);

        $controller2 = new Controller();
        $controller2->setWired(1);
        //        TV 1 has 2 remote controller
        $tv1->addController($controller1);
        $tv1->addController($controller1);
        //        TV 2 has 1 remote controller
        $tv2->addController($controller1);

        $tv1->price = 20;
        $tv2->price = 10;

        $console = new Console();
        //        console has 2 remote controller and 2 wired controllers
        $console->addController($controller1);
        $console->addController($controller1);
        $console->addController($controller2);
        $console->addController($controller2);
        $console->price = 15;

        $microwave = new Microwave();
        $microwave->price = 50;

        $electronics_items = new ElectronicItems();
        $electronics_items->addItemToList($tv1);
        $electronics_items->addItemToList($tv2);
        $electronics_items->addItemToList($console);
        $electronics_items->addItemToList($microwave);

        echo "QUESTION -1: \n============\n";
        echo "Item List (Sorting by Price): \n";
        $sortedItemByPrice = $electronics_items->getSortedItemsByPrice();
        echo str_pad("TYPE", 20) . "\t\t" . str_pad("EXTRAS", 20) . "\t\tPRICE\n";
        foreach ($sortedItemByPrice as $item) {
            echo str_pad($item['type'], 20) . "\t\t" . str_pad($item['item']->extras . ' controllers', 20) . "\t\t" . '$' . $item['price'] . "\n";
        }
        echo "\n--------------------------------------------------\n";
        echo "QUESTION -2: \n============\n";
        echo "TV1 Price\t\t:\t" . $tv1->price . "\n";
        echo "TV2 Price\t\t:\t" . $tv2->price . "\n";
        echo "Microwave Price\t:\t" . $microwave->price . "\n";
        echo "Console Price\t:\t" . $console->price . "\n----------------------\n";
        echo "Total Price\t\t:\t" . $electronics_items->getTotalPrice() . "\n";
        echo "---------------------------------------------------\n";
        echo "---------------------*END*-------------------------\n";
    }
}

new Main();
