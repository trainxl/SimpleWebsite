<?php

/**
 * @author duerkop
 */
class HomeController extends Controller {

    function index() {

        /*** load the index template ***/
        $this->registry->template->show('index');

    }

}
?>
