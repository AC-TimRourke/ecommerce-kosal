<?php
use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{
    /**
     * Render the cart HTML table
     *
     * @covers Cart::renderHtml
     */
    public function testRenderHtml()
    {
        $cart = new Item('foo');
        $cart->renderHtml();
        $this->assertEquals('foo', $cart->renderHtml());
    }
}
