<?php
use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    /**
     * If item is added to the cart
     *
     * @covers Cart::addItem
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
     * @covers Cart::removeItem
     */
    public function testRemoveItem()
    {
        $cart = new Cart(['foo']);
        $cart->removeItem('foo');
        $this->assertEquals([], $cart->getItems());

        $cart = new Cart(['foo', 'bar', 'horse', 3]);
        $cart->removeItem(3);
        $this->assertEquals(['bar', 'foo', 'horse'], $cart->getItems());

        $cart = new Cart(['foo', 'bar', 'horse', 'bar', 'horse', 3]);
        $cart->removeItem('foo');
        $this->assertEquals(['bar', 'bar', 'horse', 'horse', 3], $cart->getItems());
    }

    /**
     * Get the list of items in the cart
     *
     * @covers Cart::getItems
     */
    public function testGetItems()
    {
        $cart = new Cart();
        $this->assertEquals([], $cart->getItems());

        $cart = new Cart([1, 2, 3]);
        $this->assertEquals([1, 2, 3], $cart->getItems());
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
        $this->assertEquals(4, $cart->getItemsCount());
    }

    /**
     * Update the quantity for a given item in the cart
     *
     * @covers Cart::getItems
     * @depends testGetItems
     */
    public function testUpdateQuantity()
    {
        $cart = new Cart(['foo']);
        $this->assertEquals(['foo'], $cart->getItems());

        $cart->updateQuantity('foo', 6);
        $this->assertEquals(['foo', 'foo', 'foo', 'foo', 'foo', 'foo'], $cart->getItems());

        $cart->updateQuantity('foo', 4);
        $this->assertEquals(['foo', 'foo', 'foo', 'foo'], $cart->getItems());

        $cart = new Cart(['foo', 'bar', 'foobar']);
        $cart->updateQuantity('foo', 4);
        $this->assertEquals(['bar', 'foo', 'foo', 'foo', 'foo', 'foobar'], $cart->getItems());
    }
}
