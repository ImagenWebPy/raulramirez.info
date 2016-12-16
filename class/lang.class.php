<?php

class mylanguage {

    function get_language() {
        return $this->language;
    }
    // load language setting 
    function load_language($lang) {
        $default_language = "es";
        $this->language = $lang;
        switch ($this->get_language()) {
            case "es":
                require_once 'lang/lang-' . $this->get_language() . '.inc.php';
                break;
            case "en":
                require_once 'lang/lang-' . $this->get_language() . '.inc.php';
                break;
            default:
                // default language is 
                require_once 'lang/lang-' . $this->get_language() . '.inc.php';
                break;
        }
    }

    // end language function loading
}

?>