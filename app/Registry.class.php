<?php

/**
 * Registry class
 *
 * @author duerkop
 */
class Registry {
    /*
    * @the vars array
    * @access private
    */
    private $vars = array();

    /**
    * Saves attributes on the fly
    * @set undefined vars
    * @param string $index
    * @param mixed $value
    * @return void
    *
    */
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    /**
    * Getter for attributes
    * @get variables
    * @param mixed $index
    * @return mixed
    */
    public function __get($index) {
        return $this->vars[$index];
    }
}