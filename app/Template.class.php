<?php

/**
 * Loads the HTML templates
 *
 * @author duerkop
 */
class Template {

    /*
     * @the registry
     * @access private
     */
    private $registry;

    /*
     * @Variables array
     * @access private
     */
    private $vars = array();

    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
     public function __set($index, $value) {
        $this->vars[$index] = $value;
     }


     function show($name) {
        $content = __SITE_PATH . 'views' . '/' . $this->registry->controllerName . '/' . $name . '.php';

        if (file_exists($content) == false) {
                throw new Exception('Template not found in '. $content);
                return false;
        }

        // Load variables
        foreach ($this->vars as $key => $value) {
                $$key = $value;
        }

        // Load the layout
        require_once __SITE_PATH . 'views/layouts/' . $this->registry->layout . '.html';

    }
    
}
?>
