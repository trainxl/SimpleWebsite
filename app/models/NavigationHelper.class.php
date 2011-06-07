<?php
/**
 * Helps to build the navigation
 *
 * @author duerkop
 */
class NavigationHelper {

    private $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    function buildNavigation(array $navigation) {

        $html = '<ul id="main-navigation">';

        foreach($navigation as $controller) {

            $currClass = '';

            // Find out the current page
            if ($this->registry->controllerName == $controller['href']) {
                $this->registry->template->currentPageName = $controller['label'];

                // Make the active link visible
                $currClass = ' class="active"';
            }
            
            $html .= '<li' . $currClass . '><a href="http://' . __HOST . '/' . $controller['href'] . '">' . $controller['label'] . "</a></li>\n";


        }

        $html .= '</ul>';

        return $html;
    }


}
?>
