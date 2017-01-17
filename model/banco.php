<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 02/10/2016
 * Time: 20:47
 * IUQuery é responsável pelo retorno de verdadeiro ou falso ao realizar inserts e updates do banco de dados;
 * ReturnBanco retorna um objeto mysqli
 */
header('Content-Type: text/html; charset=utf-8');
abstract class Banco
{
    private $banco;

    public function __construct(){

        //$this->banco = new mysqli("mysql.hostinger.com.br", "u147328039_najma", "najmasafi", "u147328039_najma");
        $this->banco = new mysqli("localhost", "root", "", "najmasafi");
        ini_set('default_charset','UTF-8');
        $this->banco->query("SET NAMES 'utf8'");
        $this->banco->query('SET character_set_connection=utf8');
        $this->banco->query('SET character_set_results=utf8');
        $this->banco->query('SET character_set_client=utf8');
    }

    public function ReturnBanco(){
        return $this->banco;
    }

    public function insert($tabela, $campos, $valores){

        $sql = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";

        return $this->ReturnBanco()->query($sql) or die($this->banco->error);

    }

    public function select($campos,$tabela){
        $consulta = [];
        $sql = "SELECT {$campos} FROM {$tabela}";

        if($dados = $this->banco->query($sql)){

            if($dados->num_rows > 0){

                while($row = $dados->fetch_object()){

                    $consulta[] = $row;

                }
                return $consulta;
            }

            else{
                return "Não foram encontrados resultados que se encaixem nessa busca.";
            }
        }
        else{
            return $this->banco->error;
        }
    }


    public function selectWhere($campos,$tabela,$condicao){
        $consulta = [];
        $sql = "SELECT {$campos} FROM {$tabela} WHERE {$condicao}";

        if($dados = $this->banco->query($sql)){

            if($dados->num_rows > 0){

                while($row = $dados->fetch_object()){
                    $consulta[] = $row;
                }
                return $consulta;
            }
            else{
                return "Não foram encontrados resultados que se encaixem nessa busca.";
            }
        }

        else{
            return $this->banco->error;
        }
    }


    public function query($query){

        if( $query = $this->ReturnBanco()->query($query) ){

            $retorno = "Query efetuada\n";

        }
        else{

            $retorno = $this->ReturnBanco()->error;
        }

        return($retorno);
    }


}



