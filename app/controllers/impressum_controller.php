<?php

/**
 * @author duerkop
 */
class ImpressumController extends Controller {

    function index() {

        /*** load the index template ***/
        $this->registry->template->show('index');

    }

}
?>
