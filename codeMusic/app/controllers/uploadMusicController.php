<?php

    namespace controllers;

    class uploadMusicController extends MainController{

        public function index(){
            $titleWeb = "codeMusic - Upload Music";

            if(isset($_POST['uploadMusic'])){
                $this->newUpload();
            }

            require_once('app/views/header.php');
            require_once('app/views/uploadMusicView.php');
            require_once('app/views/footer.php');
        }

        function createFolder($folderDir){
            if(!is_dir($folderDir)){
                mkdir($folderDir, 0777, true);
            }
        }
        
        public function newUpload(){
            if(empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/login');
                die();
            }

            if($_FILES["musicFile"]["error"] != 0){
                echo $_FILES["musicFile"]["error"];
                die();
            }

            if($_FILES["coverFile"]["error"] != 0){
                echo $_FILES["coverFile"]["error"];
                die();
            
            }

            $musicFileName = $_FILES["musicFile"]["name"];
            $coverFileName = $_FILES["coverFile"]["name"];

            $musicFile = $_FILES["musicFile"];
            $coverFile = $_FILES["coverFile"];

            //DIR
            $dirMusic = DIR_BASE."/src/uploads/audioFile/user-".$_SESSION['user']."/";
            $dirCover = DIR_BASE."/src/uploads/coverFile/user-".$_SESSION['user']."/";

            $this->createFolder($dirMusic);
            $this->createFolder($dirCover);

            if (move_uploaded_file($musicFile["tmp_name"], "$dirMusic".$musicFile["name"])) { 
                echo "Arquivo enviado com sucesso!"; 
            }
            else { 
                echo "Erro, o arquivo não pode ser enviado."; 
            }
            if (move_uploaded_file($coverFile["tmp_name"], "$dirCover".$coverFile["name"])) { 
                echo "Arquivo enviado com sucesso!"; 
            }
            else { 
                echo "Erro, o arquivo não pode ser enviado."; 
            }

            $musicName = $_POST['musicName'];
            $artistName = $_POST['artistName'];
            $gender = $_POST['gender'];
            
            $this->conn->query("  INSERT INTO music (musicName, artistName, musicFileName, coverFileName, gender) 
                            VALUES ('$musicName', '$artistName', '$musicFileName', '$coverFileName', '$gender')
                        ");
		}
    }
    