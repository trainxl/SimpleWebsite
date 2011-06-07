<?php

/**
 * @author duerkop
 */
class AngebotController extends Controller {

    function index() {

        /*** load the index template ***/
        $this->registry->template->show('index');

    }

    function hundekuchen() {
        /*** load the index template ***/
        $this->registry->template->show('hundekuchen');
    }

}
?>
