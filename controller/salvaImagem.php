<?php
require ('verificarLogado.php');


    if(!empty($_FILES)){
        $pagina = $_POST['pagina'];
        $ext = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);

        $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
        $targetPath = "../imagens/backgrounds/".$pagina."/background.".$ext; // Target path where file is to be stored

        move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
        echo("Background alterado com sucesso!");

    }else{
        echo "Erro interno, contate o administrador do sistema!";
    }

/*
if(isset($_FILES["file"]["type"]))
{
    $extensoesValidas = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $extensao = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);


    if ( (($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
        )
        && in_array($extensao, $extensoesValidas)) {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        }
        else
        {
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
            }
            else
            {
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
                echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
                echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
            }
        }
    }
    else
    {
        echo "<span id='invalid'>***Invalid file Size or Type***<span>";
    }
}*/
?>





?>







