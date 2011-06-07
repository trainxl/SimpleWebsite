<?php

/**
 * @author duerkop
 */
class TeamController extends Controller {

    function index() {

        /*** load the index template ***/
        $this->registry->template->show('index');

    }

}
?>
