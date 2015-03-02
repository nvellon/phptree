<?php
/*
 * This file is part of the PHPTree package.
 *
 * (c) Nicolás Vellón <nvellon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPTree;

class BinaryNode
{
    /**
     * @var mixed
     */
    public $value;

    /**
     * @var Node
     */
    public $left;

    /**
     * @var Node
     */
    public $right;

    /**
     * Class constructor
     */
    public function __construct($item)
    {
        $this->value = $item;
        $this->left = null;
        $this->right = null;
    }
}