<?php
/*
 * This file is part of the PHPTree package.
 *
 * (c) Nicolás Vellón <nvellon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPTree\BinaryTree;
use PHPTree\BinaryNode;

class BinaryTreeTest extends \PHPUnit_Framework_TestCase
{
    protected $tree;

    /**
     * Create mocks
     *
     * @return void
     */
    public function setUp()
    {
        $this->tree = new BinaryTree();
    }

    /**
     * Test the isEmpty method
     *
     * @return void
     */
    public function testIsEmpty()
    {
        $this->assertTrue($this->tree->isEmpty());
    }

    /**
     * Test the insert method
     *
     * @return void
     */
    public function testInsert()
    {
        $this->tree->insert(1);

        $this->assertFalse($this->tree->isEmpty());
    }

    /**
     * Test the find method
     *
     * @return void
     */
    public function testFind()
    {
        $node = $this->tree->find(3);

        $this->assertNull($node);

        $this->tree->insert(2);
        $this->tree->insert(3);
        $this->tree->insert(1);

        $node = $this->tree->find(3);

        $this->assertEquals(3, $node->value);
    }
}
