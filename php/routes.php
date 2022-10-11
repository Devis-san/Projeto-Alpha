<?php 
  
    class RouteController {
        protected $route;
        /**
         * @author: Vitor Hugo
         * @version: 1.0
         * @date: 2022-09-01
         * @description: This function is responsible for getting the route
        */
        public function __construct(){
            $_SERVER['REQUEST_URI'] = explode('?', $_SERVER['REQUEST_URI'])[0];
            $this->route = $_SERVER['REQUEST_URI'];
            $this->route = explode('/', $this->route);
            $this->route = array_filter($this->route);
            $this->route = array_values($this->route);
        }
        /**
         * @author Vitor Hugo
         * @version 1.0
         * @date 2022-09-01
         * @description This function is responsible for rendering the views 
        */
        public function render(){
            if(!empty($this->route[0])){    
                $finalRoute  = "";
                foreach($this->route as $key => $value){
                    //add routes to string like /route1/route2/route3
                    //if ends with .html remove
                    $value = strpos($value, ".php") !== false ? str_replace(".php", "", $value) : $value;
                    $finalRoute .= "/".$value;
                    if(file_exists("views/" . $finalRoute.".php")){
                        //if exists, render the view
                        include "views/" . $finalRoute.".php";
                    }
                }
            }else{
                include 'views/' . 'home.php';
            }
        }
}