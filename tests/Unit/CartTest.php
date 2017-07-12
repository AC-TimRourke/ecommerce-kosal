<?php
use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    public function testAddItem()
    {
        $cart = new Cart();

        $cart->addItem('foo');
        $this->assertEquals(array('foo'), $cart->getItems());
        $this->assertNotEquals(array('bar'), $cart->getItems());
    }
    public function testGetItems()
    {
        $cart = new Cart();

        $this->assertEquals(array(), $cart->getItems());
    }
}
