<?php
/**
 * Implementation of a Node object in php.
 * 
 * @author Salim Kapadia
 * @package DataStructures
 * @version 1.0
 */

Class Library_Node{
        private $obj;
        private $next;
        private $prev;

        /**
         * Constructor to this object.
         * @param Object $obj 
         */
        public function __construct($obj=null){
                if(!($obj == null)){
                        $this->obj = $obj;
                }
                $this->next = $this->prev = null;
        }
        /**
         * This function stores the incoming object and returns $this allowing
         * for method channing. 
         * @param Object $obj
         * @return \Library_Node 
         */
        public function setObject($obj){
                $this->obj = $obj;
                return $this;
        }
        /**
         * This function returns whatever object that is stored.
         * @return Object 
         */
        public function getObject(){
                return $this->obj;
        }        
        /**
         * This function set's the next pointer to the new Node.
         * @param Library_Node $n
         * @return \Library_Node 
         */
        public function setNext(Library_Node $n=null){
                $this->next = $n;
                return $this;
        }
        /**
         * This function returns the next Node.
         * @return Library_Node 
         */        
        public function getNext(){
                return $this->next;
        }
        /**
         * This function set's the previous pointer to the new Node.
         * @param Library_Node $p
         * @return \Library_Node 
         */
        public function setPrev(Library_Node $p=null){
                $this->prev = $p;
                return $this;
        }
        /**
         * This function returns the previous Node.
         * @return Library_Node 
         */        
        public function getPrevious(){
                return $this->prev;
        }
        /**
         * 
         * This function returns the contents of the object.
         * @return <string>
         */
        public function __toString(){
                echo "obj:$this->obj;next:$this->next;prev:$this->prev";
        }
}