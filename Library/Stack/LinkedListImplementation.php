<?php
/**
 * This class Implements a Stack via a Linked List.
 * For more information see: 
 *      http://simple.wikipedia.org/wiki/Stack_(data_structure)
 *      http://en.wikipedia.org/wiki/LIFO_(computing)
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */
require_once("Library/Node.php");
class Library_Stack_LinkedListImplementation{
        public $head;
        /**
         * Constructor to this object.
         * 
         */          
        public function __construct(){
            $this->head = null;
        }
        /**
         * Prepends passed elements to the front of the Linked List.
         * @param Object $obj 
         */
        public function push($obj){
            $node = new Library_Node($obj);
            $node->setNext($this->head);
            $this->head=$node;
        }
        /**
         * Shift an element off the beginning of Linked List
         * @return type 
         */
        public function pop(){
            $currObj = $this->head->getObject();
            $this->head = $this->head->getNext();
            return $currObj;
        }
        /**
         * This function tells you if the Linked List is empty or not.
         * @return <boolean> 
         */
        public function isEmpty(){
            return is_null($this->head);
        }
}