<?php

include 'banco.php';
class Post extends Banco{

	public function InsertPost($tituloPostagem, $conteudoPostagem, $facebookPostagem, $youtubePostagem){

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');

		$query =" INSERT INTO postagens	(tituloPostagem,
 							dataPostagem,
 							conteudoPostagem,
 							facebookPostagem,

 							youtubePostagem)

							VALUES ( '$tituloPostagem',
							'$data',
							'$conteudoPostagem',
							'$facebookPostagem',
							'$youtubePostagem'
							)";


		return $this->ReturnBanco()->query($query);

	}

	public function ListPosts(){

		$query = "SELECT codigoPostagem, tituloPostagem, DATE_FORMAT(dataPostagem, '%d/%m/%Y') AS dataPostagem, conteudoPostagem, facebookPostagem,	youtubePostagem FROM postagens ORDER BY codigoPostagem DESC ";

		if($resultado = $this->ReturnBanco()->query($query)){

			if($resultado->num_rows>0){
				$dados = [];
				while($row = $resultado->fetch_assoc()){

					$dados[] =  $row;

				}

				return $dados;
			}

			else{
				echo'<h2 class="text-center">Este blog ainda não possui postagens :/</h2>';
			}
		}

		else{

			die ($this->ReturnBanco()->error);
		}

	}

	public function GetPost($codigoPostagem){

		$query = " SELECT tituloPostagem, dataPostagem, conteudoPostagem, facebookPostagem,	youtubePostagem FROM postagens WHERE codigoPostagem ='$codigoPostagem' ";
		return $this->ReturnBanco()->query($query);

	}


	public function DeletePost($codigoPostagem){


		$query = "DELETE FROM postagens WHERE codigoPostagem = '$codigoPostagem'";
		if($this->ReturnBanco()->query($query)){

			echo'Registro deletado com sucesso!';
		}
		else{
			echo'Falha ao deletar!';
		}

	}

	public function UpdatePost($codigoPostagem, $tituloPostagem, $conteudoPostagem, $facebookPostagem, $youtubePostagem){
		$query = "UPDATE postagens SET  tituloPostagem = '$tituloPostagem', conteudoPostagem = '$conteudoPostagem ', facebookPostagem = '$facebookPostagem', youtubePostagem = '$youtubePostagem' WHERE codigoPostagem = '$codigoPostagem'";

		if($this->ReturnBanco()->query($query)){

			echo'Postagem modificada com sucesso!';
		}
		else{

			echo'Falha ao fazer alteração!';
		}


	}
}


?>