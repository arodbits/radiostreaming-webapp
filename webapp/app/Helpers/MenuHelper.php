<?php

use Illuminate\Support\Facades\Request;

Class MenuHelper{

    /**
     * Check if the passed $route is the current.
     * @param  string  $route
     * @param  string  $output
     * @return boolean
     */

    public static function isActive($route, $output = 'active'){
    	$originalRoute = Request::path();
    	if($originalRoute == $route) return $output;
    }
}

?>