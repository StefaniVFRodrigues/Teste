<?php

    namespace controllers;

    class listMusicController extends MainController{

        var $queryGetMusic;

        public function index(){
            $pageTitle = "CodeMusic - Playlist";

            if(empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/login');
            }

            MainController::getDataUser();
            $this->listMusics();
            
            require_once('app/views/header.php');
            require_once('app/views/listMusicView.php');
            require_once('app/views/footer.php');
        }

        public function listMusics(){
            $this->queryGetMusic = $this->conn->query("SELECT * FROM music");
        }
    }
