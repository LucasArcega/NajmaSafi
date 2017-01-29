<?php

	include 'banco.php';

	class Membro extends Banco{

        public function InsertMembro($nome,$sobre,$enderecoImagem){

            $query  = "INSERT INTO membros (nomeMembro, sobreMembro, enderecoImagemMembro) VALUES('$nome','$sobre','$enderecoImagem') ";

            if($this->ReturnBanco()->query($query)){

                return "Membro Inserido com sucesso!";

            }
            else{
                return $this->ReturnBanco()->error;
            }

        }

        public function DeleteMembro($codigoMembro){


            $query = "DELETE FROM membros WHERE codigoMembro = '$codigoMembro'";
            if($this->ReturnBanco()->query($query)){

                echo'Registro deletado com sucesso!';
            }
            else{

                echo'Falha ao deletar!';
            }

        }

        public function BuscarMembro($codigo){
            $query = "SELECT codigoMembro, nomeMembro, sobreMembro, enderecoImagemMembro FROM membros WHERE codigoMembro = $codigo";


            try{
                $resultado = $this->ReturnBanco()->query($query);
            }
            catch (mysqli_sql_exception $ex){
                return $ex;
            }

            return $resultado->fetch_assoc();
        }

        public function ListMembros(){

            $query = "SELECT codigoMembro, nomeMembro, sobreMembro, enderecoImagemMembro FROM membros";


            if($resultado = $this->ReturnBanco()->query($query)){

                if($resultado->num_rows>0){
                    $dados = [];
                    while($row = $resultado->fetch_assoc()){

                        $dados[] =  $row;

                    }


                    return $dados;
                }

                else{

                    echo'<h2 class="text-center">Este blog ainda não possui Membros</h2>';

                }
            }
            else{

                die ($this->ReturnBanco()->error);
            }

        }

        public function UpdateMembro($codigo, $nome, $sobre, $enderecoImagem){

            if($enderecoImagem != null){
                $sql = "UPDATE membros SET nomeMembro = '$nome', sobreMembro = '$$sobre', enderecoImagemMembro = '$enderecoImagem' 
                        WHERE codigoMembro = $codigo";

            }else{
                $sql = "UPDATE membros SET nomeMembro = '$nome', sobreMembro = '$$sobre' 
                        WHERE codigoMembro = $codigo";
            }

            if($this->ReturnBanco()->query($sql)){
                return(true);
            }
            else{
                return $this->ReturnBanco()->error;
            }
        }

	}


?>