<?php
class Controller{
    public function model($model){  
        if(file_exists(APPROOT . "/models/" . $model . ".php")){    // Check if the model file exists
            require_once APPROOT . "/models/" . $model . ".php";    // Require the model file
            return new $model;                                   // Return the model
        }   
    }

    public function view($view, $data = []){    // $data is an array of data to be passed to the view
        if(file_exists(APPROOT . "/views/" . $view . ".php")){  // Check if the view file exists
            require_once APPROOT . "/views/" . $view . ".php";  // Require the view file
        }else {die("view doesn't exist!!!");}
    }
}