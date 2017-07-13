<?php
// Anything under the "/app" folder should have the namespace "App".
namespace App;

/**
 * Magement of the item in the shopping cart
 */
class Cart {
    /**
     * Declare properties
     *
     * @var array $items A list of product items
     */
    private $items = [];

    /**
     * @var str $item An item within the cart
     */
    private $item;

    /**
     * @var int $totalItemCount The number of item in the cart
     */
    private $totalItemCount;

    /**
     * Initialize our properties
     *
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Add an item to the cart
     *
     * @param str $item The item/product being added to the cart
     * @return void
     */
    public function addItem($item)
    {
        // Push item into list of array
        array_push($this->items, $item);
    }

    /**
     * Remove an item from the cart
     *
     * @return void
     */
    public function removeItem($item)
    {
        return false;
    }

    /**
     * Get list of items as an array
     *
     * @return array Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Get the count of items in the cart as a number
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->totalItemCount;
    }
}
