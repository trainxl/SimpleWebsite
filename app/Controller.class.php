<?php

/**
 * The Controller Base Class
 *
 * @author duerkop
 */
abstract class Controller {

    /*
     * @registry object
     */
    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
        // The standard layout
        $this->registry->layout = 'main';
        
        // The standard navigation
        $navi = new NavigationHelper($this->registry);

        $this->registry->template->navigation = $navi->buildNavigation($this->registry->navigation);
    }

    /**
     * @all controllers must contain an index method
     */
    abstract function index();
}
?>
