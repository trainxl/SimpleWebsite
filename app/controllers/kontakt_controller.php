<?php

/**
 * @author duerkop
 */
class KontaktController extends Controller {

    function index() {

        /*** load the index template ***/
        $this->registry->template->show('index');

    }
}
?>
