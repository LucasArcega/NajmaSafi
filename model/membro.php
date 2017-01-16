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

	}


?>