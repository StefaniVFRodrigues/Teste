<?php

    namespace controllers;

    class homeController extends MainController{

        public function index(){
            if(empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/login');
            }            

            MainController::getDataUser();

            require_once('app/views/header.php');
            require_once('app/views/homeView.php');
            require_once('app/views/footer.php');
        }
    }
