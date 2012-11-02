<?php
/**
 * This class Implements a Queue via an Array.
 * For more information see: http://en.wikipedia.org/wiki/First_in_first_out
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */
class Library_Queue_ArrayImplementation{
        private $data;
        /**
         * Constructor to this object.
         * 
         */        
        public function __construct(){
            $this->data =array();
        }        
        /**
         * Adds a new element at the end of the queue, after its current last element.
         * @param type $obj
         * @return \Library_Queue_ArrayImplementation 
         */
        public function push($obj){
            $this->data[] = $obj;
            return $this;
        }
        /**
         * This is a helper function that calls push()
         * @param type $obj
         * @return \Library_Queue_ArrayImplementation 
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
            return array_pop($this->data);
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
            return empty($this->data);
        }
}