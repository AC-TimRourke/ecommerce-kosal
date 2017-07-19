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
        $this->assertEquals(array('foo'), $cart->getItems());
        $this->assertNotEquals(array('bar'), $cart->getItems());
    }

    /**
     * Remove an item from the cart
     *
     * @covers Cart::getItems
     */
    public function testRemoveItem()
    {
        $cart = new Cart();
        $cart->removeItem(array('foo'));
        $this->assertEquals(array('foo'), $cart->getItems());
    }

    /**
     * Get the list of items in the cart
     *
     * @covers Cart::getItems
     */
    public function testGetItems()
    {
        $cart = new Cart();
        $this->assertEquals(array(), $cart->getItems());
        $this->assertNotEquals(array('foo', 'bar'), $cart->getItems());
    }

    /**
     * Get the list of items, as a number, in the cart
     *
     * @covers Cart::getItems
     * @depends testGetItems
     */
    public function testGetItemsCount()
    {
        $cart = new Cart(array(1, 2, 3));
        $cart->getItems();
        $this->assertEquals(3, count($cart->getItems()));
    }

    /**
     * Render the cart HTML table
     *
     * @covers Cart::getItems
     */
    public function testRenderHtml()
    {
        $cart = new Cart();
        $cart->renderHtml('foo');
        $this->assertEquals('foo', $cart->getItems());
    }
}
