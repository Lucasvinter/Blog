<?php
require_once "conexcao.php";

class Mostrar_noticias extends Blog
{

    private $sql;
    private $query;
    private $consulta;
    public $id;
    public $resultado;
    public $titulo;

    public function __construct()
    {

        parent::__construct();

        if (isset($_POST['cadastrar'])) {

            $this->receber_posts_cadastro();

        }elseif (isset($_POST['editar'])){
            $this->receber_posts_editar();

        }elseif (isset($_POST['deletar'])){
            $this->receber_posts_deletar();
        }

    }

    protected function receber_posts_cadastro()
    {

    $this->titulo = utf8_decode($_POST['titulo']);
    $this->text_area = utf8_decode($_POST['text_area']);


    }
    protected function receber_posts_editar()
    {
        $this->id = utf8_encode($_POST['id']);
        $this->titulo = utf8_decode($_POST['titulo']);
        $this->text_area = utf8_decode($_POST['text_area']);


    }
    protected function receber_posts_deletar()
    {

        $this->id = utf8_decode($_POST['id']);


    }
    public function mostrar()
    {

        $this->sql = "SELECT * FROM blog";

        $this->resultado = array();

        if ($this->query = mysqli_query($this->con, $this->sql)) {

            $this->consulta = mysqli_fetch_all($this->query, MYSQLI_ASSOC);

            foreach ($this->consulta as $chave => $valor) {


                $this->sql = "SELECT * FROM blog ";
                $this->query = mysqli_query($this->con, $this->sql);

                $this->resultado[] = mysqli_fetch_array($this->query);
            }
        }
    }

    public function editar()
    {
        if (isset($_POST['editar'])) {
            $sql = "UPDATE blog SET titulo = '$this->titulo', text_area = '$this->text_area' WHERE id=$this->id";
            $query = mysqli_query($this->con, $sql);

        }

    }

    public function deletar()
    {

        $this->sql = "DELETE FROM blog WHERE (id = $this->id)";
        if (mysqli_query($this->con, $this->sql)) {
            header("location: blog.php");
        } else {
            echo "error";
        }

    }

//    public function getid($id) {
//
//
//        $sql = "SELECT * FROM blog  WHERE id = $id";
//
//        return mysqli_fetch_array(mysqli_query($this->con, $sql));
//
//    }


    public function cadastrar()
    {

        if (isset($_POST['cadastrar'])) {
            $this->sql = "INSERT INTO blog (id, titulo, text_area) values (DEFAULT , '$this->titulo', '$this->text_area');";
            if (mysqli_query($this->con, $this->sql)) {
                header("location: blog.php");
            } else {
                echo "error";
            }

        }

    }
}
?>