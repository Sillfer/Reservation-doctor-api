<?php
    class UserController extends Controller{
        public function __construct(){
            $this->model = $this->model("User");
        }

        private function generateReference(){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 10; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        public function signUp(){
            $request_body = file_get_contents("php://input");   
            $refernce = $this->generateReference();
            extract(json_decode($request_body, true));  
            $this->model->signUp([$refernce, $firstname, $lastname, $birthdate]);   
        }  
    }
?>