<?php
class HomeController extends Controller{

    public function __construct(){
        $this->model = $this->model("Home");
    }

    public function index(){
        echo "home/index";
    }
}