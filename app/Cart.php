<?php
// Anything under the "/app" folder should have the namespace "App".
namespace App;

/**
 * Management of the item in the shopping cart
 */
class Cart
{
    /**
     * Declare properties
     *
     * @var array $items A list of product items
     */
    private $items = [];

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
        return count($this->items);
    }

    /**
     * Remove an item from the cart
     *
     * @param mixed $item Parameter is of any type of data
     * @return void
     */
    public function removeItem($item)
    {
        $this->items = array_values(array_diff($this->items, array($item)));
    }

    public function updateQuantity($item, $qty)
    {
        array_filter( $this->items, function($value) use ($item) { return $value === $item; } );

        for ($i = 1; $i < $qty; $i++) {
            // Push new item into $items array
            $this->addItem($item);
        }
    }
}
