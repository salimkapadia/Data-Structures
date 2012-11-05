<?php
/**
 * This class Implements a Stack via a Linked List.
 * For more information see: 
 *      http://en.wikipedia.org/wiki/Binary_tree
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */
class Library_Tree_BinaryTree{
        public $value; /* @var Object */
        public $bTreeLeft; /* @var Library_Tree_BinaryTree */
        public $bTreeRight; /* @var Library_Tree_BinaryTree */
        /**
         * Constructor to this object.
         * @param Object $val - The item which you want to store.
         */
        public function __construct($val){
            $this->value = $val;
            $this->bTreeLeft=$this->bTreeRight=null;
        }
        /**
         * Get the value stored in this Tree.
         * @return Object 
         */
        public function getValue(){
            return $this->value;
        }        
        /**
         * This function inserts an object into the tree
         * @param Object $val - The value to store in the Tree. 
         */
        public function insert($val){
            if ($val < $this->value){
                if ($this->bTreeLeft === null){
                    $this->bTreeLeft = new BinaryTree($val);
                }
                else
                {
                    $this->bTreeLeft->insert($val);
                }
           }
           else if ($val > $this->value){
               if ($this->bTreeRight === null){
                   $this->bTreeRight = new BinaryTree($val);
                }
                else
                {
                    $this->bTreeRight->insert($val);
                }
            }
        }
        /**
         * This function prints the tree in preoder mode recurisvely
         * see: http://en.wikipedia.org/wiki/Binary_tree#Pre-order.2C_in-order.2C_and_post-order_traversal
         * @param Object $delimter 
         */
        public function preorderPrintRecursively($delimter=","){
            echo "{$this->value}{$delimter}";
            if (!($this->bTreeLeft === null)) $this->bTreeLeft->preorderPrintRecursively();
            if (!($this->bTreeRight === null)) $this->bTreeRight->preorderPrintRecursively();
        }
        /**
         * This function prints the tree in post mode recurisvely
         * see: http://en.wikipedia.org/wiki/Binary_tree#Pre-order.2C_in-order.2C_and_post-order_traversal
         * @param Object $delimter 
         */        
        public function postorderPrintRecursively($delimter=","){
                if (!($this->bTreeLeft === null)) $this->bTreeLeft->postorderPrintRecursively();
                if (!($this->bTreeRight === null)) $this->bTreeRight->postorderPrintRecursively();
                echo "{$this->value}{$delimter}";
        }
        /**
         * This function prints the tree in inorder mode recurisvely
         * see: http://en.wikipedia.org/wiki/Binary_tree#Pre-order.2C_in-order.2C_and_post-order_traversal
         * @param Object $delimter 
         */        
        public function inorderPrintRecursively($delimter=","){
                if (!($this->bTreeLeft === null)) $this->bTreeLeft->inorderPrintRecursively();
                echo "{$this->value}{$delimter}";
                if (!($this->bTreeRight === null)) $this->bTreeRight->inorderPrintRecursively();
        }
        /**
         * This function prints the tree in preorder mode interatively
         * see: http://en.wikipedia.org/wiki/Binary_tree#Pre-order.2C_in-order.2C_and_post-order_traversal
         * @param Object $delimter 
         */          
        public function preorderPrintIteratively(){
            require_once('Library/Stack/Library_Stack_LinkedListImplementation.php');
            $stack = new Stack();
            $stack->push($this);
            while (!$stack->isEmpty()){
                    $curr = $stack->pop();
                    echo "$curr->value,";
                    if (!($curr->bTreeRight === null)) $stack->push($curr->bTreeRight);
                    if (!($curr->bTreeLeft === null)) $stack->push($curr->bTreeLeft);

            }
        }
        /**
         * This function prints the tree in postorder mode interatively
         * see: http://en.wikipedia.org/wiki/Binary_tree#Pre-order.2C_in-order.2C_and_post-order_traversal
         * @param Object $delimter 
         */           
        public function postorderPrintIteratively(){
            require_once('Library/Stack/Library_Stack_LinkedListImplementation.php');
            $stack = new Stack();
            $stackOutput = new Stack();
            $stack->push($this);
            while (!$stack->isEmpty())
            {
                    $curr = $stack->pop();
                    $stackOutput->push($curr);
                    if (!($curr->bTreeLeft === null)) $stack->push($curr->bTreeLeft);
                    if (!($curr->bTreeRight === null)) $stack->push($curr->bTreeRight);
            }
            while (!$stackOutput->isEmpty())
            {
                    $curr = $stackOutput->pop();
                    echo "$curr->value,";
            }
        }
}
?>
                          
