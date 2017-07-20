<?php
// Anything under the "/app" folder should have the namespace "App".
namespace App;

/**
 * Magement of the item object
 */
class Item
{
    /**
     * Declare properties for an item in the cart
     *
     * @var str $name The name of the item
     */
    public $name;

    /**
     * @var int $price The item price
     */
    public $price;

    /**
     * @var str $desc The description of the item
     */
    public $desc;

    /**
     * @var str $image The item image URL path
     */
    public $image;

    /**
     * @var str $renderHtml The HTML cart listing layout
     */
    public $renderHtml = 'foo';

    /**
     * Initialize our properties
     *
     * @param array $items
     */
    public function __construct()
    {
        // $this->name = $name;
        // $this->price = $price;
        // $this->desc = $desc;
        // $this->image = $image;
        // $this->renderHtml = $renderHtml;
    }

    /**
     * Render the cart HTML table
     *
     * @return str
     */
     public function renderHtml()
     {
         return $this->renderHtml;
     }
}
