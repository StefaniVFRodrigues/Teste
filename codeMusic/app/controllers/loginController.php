<?php

    namespace Controllers;

    class loginController extends MainController{

        var $loginDanger = false;

        public function index(){
            if(!empty($_SESSION['user'])){
                header('Location: '.URL_BASE.'/home');
            }

            require_once('app/views/header.php');
            require_once('app/views/loginView.php');
            require_once('app/views/footer.php');

            if(isset($_POST['logar'])){
                $this->validateLogin();
            }
        }

        public function validateLogin(){
            $user = $_POST['user'];
            $password = $_POST['password'];

            $resultQuery = $this->conn->query("   SELECT id, user, password  
                                            FROM users 
                                            WHERE user = '$user' AND password = '$password'
                                        ");
            if(mysqli_num_rows($resultQuery) !== 1){
                $this->loginDanger = true;
            }
            else{
                $user = mysqli_fetch_array($resultQuery);
                $_SESSION['user'] = $user['user'];
                $_SESSION['userID'] = $user['id'];
            }
        }

        public function logout() {
            session_destroy();
            $this->index();
            //header('Location: '.URL_BASE.'/home');
            redirect();
        }
    }
    