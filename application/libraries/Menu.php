<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {
    private $aar_menu;

    public function __construct($aar_menu)
    {

        $this->aar_menu = $aar_menu;
    }


    public function construirMenu(){



        $ret_menu = "<nav><ul>";

        foreach ($this->aar_menu as $option){
            $ret_menu .= "<li>".$option."</li>";
        }

        $ret_menu .= "</ul><nav>";

        return $ret_menu;

    }

}


?>