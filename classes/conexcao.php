<?php

date_default_timezone_set('America/Sao_Paulo');

class Blog
{

     CONST HOST = "127.0.0.1";
     CONST USER = "root";
     CONST PASS = "";
     CONST DB   = "blog";



    public $con;


    public function __construct()
    {

        $this->conexao();

    }


    protected function conexao()
    {


        $this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);


        if (!$this->con) {
            echo "não foi";
        }

    }
}
?>

