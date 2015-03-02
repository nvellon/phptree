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

use PHPTree\BinaryNode;

class BinaryTree
{
    /**
     * @var BinaryNode
     */
    protected $root;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->root = null;
    }

    /**
     * Returns true if the tree has no nodes
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->root === null;
    }

    /**
     * Adds an element to the tree
     *
     * @param mixed $item Something to add
     *
     * @return void
     */
    public function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    /**
     * Recursively inserts a node into the tree
     *
     * @param BinaryNode $node      The node
     * @param BinaryNode &$subtree  The subtree
     *
     * @return void
     */
    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {
                $this->insertNode($node, $subtree->left);
            } else {
                // reject duplicates
            }
        }
    }

    /**
     * Finds an item in the tree
     *
     * @param mixed $item
     *
     * @return Node
     */
    public function find($item)
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            return $this->findNode($item, $this->root);
        }
    }

    /**
     * Finds an item in the tree
     *
     * @param mixed $item
     *
     * @return Node
     */
    protected function findNode($item, &$subtree)
    {
        if ($item === $subtree->value) {
            return $subtree;
        } else {
            if (null !== $subtree->left) {
                $node = $this->findNode($item, $subtree->left);
                if (null !== $node)
                    return $node;
            }
            if (null !== $subtree->right) {
                $node = $this->findNode($item, $subtree->right);
                if (null !== $node)
                    return $node;
            }
        }

        return null;
    }
}