<?php  

namespace modules;

class database{

    var $connectionMySQL;

    public function __construct(){
        $this->connection();
    }

    public function connection(){
        $this->connectionMySQL = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$this->connectionMySQL){
            echo "<p>Erro ao tentar conectar à Base de Dados <b>DB_NAME</b></p>";
        }
    }

    public function query($cmd){
        $this->connection();
        $query = mysqli_query($this->connectionMySQL, $cmd);
        return $query;
    }

}
