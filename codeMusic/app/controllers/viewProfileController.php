<?php

    namespace controllers;

    class viewProfileController extends MainController{

        public function index(){
            if(empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/login');
                die();
            }

            MainController::GetDataUser();

            require_once('app/views/header.php');
            require_once('app/views/viewProfileView.php');[[]]
            require_once('app/views/footer.php');
        }
        
        public function updatePerfil(){
            $username = $_POST['username'];
            $name = $_POST['name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $birthDay = $_POST['birthday'];
            $birthMonth = $_POST['birthMonth'];
            $birthYear = $_POST['birthYear'];
        }
    }
