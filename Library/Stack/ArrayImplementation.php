<?php
/**
 * This class Implements a Stack via an Array.
 * For more information see: 
 *      http://simple.wikipedia.org/wiki/Stack_(data_structure)
 *      http://en.wikipedia.org/wiki/LIFO_(computing)
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */
class Library_Stack_ArrayImplementation{
        private $data;
        /**
         * Constructor to this object.
         * 
         */            
        public function __construct(){
            $this->data = array();
        }
        /**
        * Prepends passed elements to the front of the array.
        * @param Object $value 
        */        
        public function push($value){
            array_unshift($this->data,$value);
        }
        /**
         * Shift an element off the beginning of array
         * @return Object 
         */
        public function pop(){
            return array_shift($this->data);
        }        
        /**
         * If the stack is not empty then it returns the last element added without
         * removing it from the stack. Otherwise returns false;
         * @return Object | false 
         */
        public function peak(){
            return ( ! $this->isEmpty()) ? $this->data[0] : false;
        }
        /**
         * This function tells you if the stack is empty or not.
         * @return <boolean> 
         */
        public function isEmpty(){
            return empty($this->data);
        }
}