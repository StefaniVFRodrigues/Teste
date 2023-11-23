<?php

    namespace controllers;

    class editProfilePictureController extends MainController{

        public function index(){
            if(empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/login');
                die();
            }

            MainController::getDataUser();

            if(isset($_POST['uploadPicture'])){
                $this->sendForm();
            }

            require_once('app/views/header.php');
            require_once('app/views/editProfilePictureView.php');
            require_once('app/views/footer.php');
        }

        public function updatePicture(){
            $picture = $_POST['picture'];
        }

        public function sendForm(){
            if($_FILES["picture"]["error"] != 0){
                echo $_FILES["picture"]["error"];
                die();
            }

            $cFileName = "PROFILE_USER_ID_6";

            $file = $_FILES["picture"];

            $uploadPath = DIR_BASE . '/src/uploads/profilePicture/';

            if (move_uploaded_file($file["tmp_name"], $uploadPath.$cFileName)) { 
                echo "Arquivo enviado com sucesso!"; 
            }
            else { 
                echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
            }

            $this->conn->query("UPDATE users SET profilePicture = '$cFileName' WHERE id = '6'");
            header('Location: '.URL_BASE.'/home');
		}
    }
    