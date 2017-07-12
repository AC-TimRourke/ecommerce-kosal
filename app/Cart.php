<?php
// Anything under the "/app" folder should have the namespace "App".
namespace App;

/**
 * Add item to the cart
 */
class Cart {
    private $items = [];

    public function addItem($item)
    {
        array_push($this->items, $item);
    }
    public function getItems()
    {
        return $this->items;
    }
}
