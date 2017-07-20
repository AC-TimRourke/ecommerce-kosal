<?php
use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    /**
     * If item is added to the cart
     *
     * @covers Cart::getItems
     */
    public function testAddItem()
    {
        $cart = new Cart();
        $cart->addItem('foo');
        $this->assertEquals(['foo'], $cart->getItems());
        $this->assertNotEquals(['bar'], $cart->getItems());
    }

    /**
     * Remove an item from the cart
     *
     * @covers Cart::getItems
     */
    public function testRemoveItem()
    {
        $cart = new Cart(['foo']);
        $cart->removeItem(['foo']);
        $this->assertEquals(['foo'], $cart->getItems());
    }

    /**
     * Get the list of items in the cart
     *
     * @covers Cart::getItems
     */
    public function testGetItems()
    {
        $cart = new Cart(['']);
        $this->assertEquals([''], $cart->getItems());
        $this->assertNotEquals(['foo'], $cart->getItems());
    }

    /**
     * Get the list of items, as a number, in the cart
     *
     * @covers Cart::getItems
     * @depends testGetItems
     */
    public function testGetItemsCount()
    {
        $cart = new Cart([0, 1, 2, 3]);
        $cart->getItems();
        $this->assertNotEquals(3, count($cart->getItems()));
    }

    /**
     * Render the cart HTML table
     *
     * @covers Cart::getItems
     */
    public function testRenderHtml()
    {
        $cart = new Cart('foo');
        $cart->renderHtml();
        $this->assertEquals('foo', $cart->getItems());
    }
}
