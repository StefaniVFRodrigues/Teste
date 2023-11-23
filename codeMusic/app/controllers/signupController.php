<?php

    namespace controllers;

    class signupController extends MainController{

        public function index(){
            $pageTitle = "CodeMusic - Crie sua conta";

            if(!empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/home');
            }

            require_once('app/views/header.php');
            require_once('app/views/signupView.php');
            require_once('app/views/footer.php');

            if(isset($_POST['newRegistration'])){
                $this->register();
            }
        }

        public function register(){
            $email = $_POST['email'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $this->conn->query("INSERT INTO users (email, password, name, user) VALUES ('$email', '$password', '$name', '$user')");
        }
    }
    