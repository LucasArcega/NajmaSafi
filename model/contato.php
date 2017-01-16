<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 02/10/2016
 * Time: 20:07
 */
include 'banco.php';
class Contato extends Banco
{
/*
    public function InsertContato($campo, $valor){

        $query = "INSERT INTO contato (telefoneContato, emailContato, codigoTipoContato)
                  VALUES ('$conteudoContato','$legendaContato','$codigoTipoContato')";

        return $this->IUQuery($query);
    }
*/
    public function UpdateContato($whatsappContato, $telefoneContato, $linkYoutubeContato, $textoFacebookContato, $textoYoutubeContato,$linkFacebookContato){


        $query = "UPDATE contatos SET linkYoutubeContato =   '{$linkYoutubeContato}', 
                  textoYoutubeContato='{$textoYoutubeContato}', whatsappContato = '{$whatsappContato}',
                  linkFacebookContato = '{$linkFacebookContato}', textoFacebookContato = '{$textoFacebookContato}',
                  telefoneContato = '{$telefoneContato}'";


        return $this->ReturnBanco()->query($query);
    }

    public function ListarContatos(){

        return $this->select('*','contatos');

    }
}