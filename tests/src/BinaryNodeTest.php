<?php
/*
 * This file is part of the PHPTree package.
 *
 * (c) Nicolás Vellón <nvellon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPTree\BinaryNode;

class BinaryNodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Create mocks
     *
     * @return void
     */
    public function setUp()
    {
    }

    /**
     * Test the constructor
     *
     * @return void
     */
    public function testProperties()
    {
        $node = new BinaryNode(1);

        $this->assertEquals(1, $node->value);

        $this->assertNull($node->left);
        $this->assertNull($node->right);
    }
}
