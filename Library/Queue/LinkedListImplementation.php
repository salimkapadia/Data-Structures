<?php
/**
 * This class Implements a Queue via an Linked List.
 * For more information see: http://en.wikipedia.org/wiki/First_in_first_out
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */
require_once("Library/Node.php");
class Library_Queue_LinkedListImplementation{
        private $head; /* @var Library_Node */
        private $tail; /* @var Library_Node */
        /**
         * Constructor to this object.
         * 
         */           
        public function __construct(){
            $this->head = null;
            $this->tail = null;
        }
        /**
         * Adds a new element at the end of the queue, after its current last element.
         * @param type $obj
         * @return \Library_Queue_LinkedListImplementation 
         */        
        public function push($obj){
            $newNode = new Library_Node($obj);
            if($this->isEmpty()){
                $this->head = $this->tail = $newNode;
            }
            else{
                $this->tail->setNext($newNode);
                $this->tail = $newNode;                
            }
            return $this;
        }
        /**
         * This is a helper function that calls push()
         * @param type $obj
         * @return \Library_Queue_LinkedListImplementation 
         */
        public function enqueue($obj){
            return $this->push($obj);
        }        
        /**
         * Removes the next element in the queue, effectively reducing its size by one. 
         * The element removed is the "oldest" element in the queue
         * 
         * @return Object
         */
        public function pop(){
            if ($this->isEmpty()) return FALSE;
            
            $obj = $this->head->getObject();
            $this->head = $this->head->getNext();
            return $obj;
        }
        /**
         * This is a helper function that calls pop()
         * @return Object 
         */
        public function dequeue(){
            return $this->pop();
        }
        /**
         * This function tells you if the queue is empty or not.
         * @return <boolean> 
         */        
        public function isEmpty(){
            return $this->head == null;
        }        
}                        