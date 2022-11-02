<?php

require_once("global.php");
require_once("db.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

//Resgata o tipo de formulario
$type = filter_input(INPUT_POST,"type");

$message = new Message($BASE_URL);
$auth = new UserDAO($conn, $BASE_URL);

//Resgata dados do usuário
$userData = $auth->verifyToken();

$movieDao = new MovieDAO($conn, $BASE_URL);

if($type === "create"){

    //Receber os dados dos inputs
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
    
    

    $movie = new Movie();

    //Validação mínima de dados
    if(!empty($title) && !empty($description) && (!empty($category))){

        $movie->title=$title;
        $movie->description=$description;
        $movie->trailer=$trailer;
        $movie->category=$category;
        $movie->length=$length;
        $movie->users_id=$userData->id;

        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
        $jpgArray = ["image/jpeg", "image/jpg"];

        //Checando tipo da imagem
        if(in_array($image["type"], $imageTypes)){

            //Checa se imagem é jpg
            if(in_array($image["type"], $jpgArray)){

                $imageFile = imagecreatefromjpeg($image["tmp_name"]);

            }else{

                $imageFile = imagecreatefrompng($image["tmp_name"]);

            }

            //Gerando o nome da imagem
            $movie = new Movie();

            $imageName = $movie->imageGenerateName();

            imagejpeg($imageFile, "./img/movies/".$imageName, 100);

            $movie->image = $imageName;

        }else{

            $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "editprofile.php");
        }
        
    }
        
    
    $movieDao->create($movie);

    }else{
       
         $message->setMessage("Você precisa adicionar pelo menos: título, descrição e categoria!","error", "newmovie.php");
    }

}elseif($type === "delete"){
    //Recebe os dados do formulario
    $id = filter_input(INPUT_POST, "id");

    $movie = $movieDao->findById($id);

    if($movie){

        //verificar se o filme do usuário
        if($movie->users_id === $userData->id){
            
            $movieDao->destroy($movie->id);

        }else{
            $message->setMessage("Informações inválidas!","error", "dashboard.php");
        }

    }else{

        $message->setMessage("Informações inválidas!","error", "dashboard.php");

    }

}elseif($type === "update"){

     //Receber os dados dos inputs
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
    $id = filter_input(INPUT_POST, "id");

    $movieDb = $movieDao->findById($id);

    if($movieDb){

        //verificar se o filme do usuário
        if($movieDb->users_id === $userData->id){

            //Validação mínima de dados
    if(!empty($title) && !empty($description) && (!empty($category))){
            
           //Edição do filme
           $movieDb->title=$title;
           $movieDb->description=$description;
           $movieDb->trailer=$trailer;
           $movieDb->category=$category;
           $movieDb->length=$length;

        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
        $jpgArray = ["image/jpeg", "image/jpg"];

        //Checando tipo da imagem
        if(in_array($image["type"], $imageTypes)){

            //Checa se imagem é jpg
            if(in_array($image["type"], $jpgArray)){

                $imageFile = imagecreatefromjpeg($image["tmp_name"]);

            }else{

                $imageFile = imagecreatefrompng($image["tmp_name"]);

            }

            //Gerando o nome da imagem
            $movie = new Movie();
            
            $imageName = $movie->imageGenerateName();

            imagejpeg($imageFile, "./img/movies/".$imageName, 100);

            $movieDb->image = $imageName;

        }else{

            $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "dashboard.php");
        }
        
    }

    $movieDao->update($movieDb);

    } else{

        $message->setMessage("Você precisa informar pelo menos titulo, descrição e categoria!","error", "dashboard.php");

    }          

}else{

    $message->setMessage("Informações inválidas!","error", "dashboard.php");

}

}else{

    $message->setMessage("Informações inválidas!","error", "dashboard.php");

 }
}
?>