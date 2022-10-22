<?php 

require_once("templates/header.php");
require_once("dao/MovieDAO.php");

//Dao dos filmes

$movieDao = new MovieDAO($conn, $BASE_URL);

$latesMovies = $movieDao->getLatestMovies() ;

$actionMovies = [];

$comedyMovies = [];

$dramaMovies = [];


?>
        <div id="main-container" class="container-fluid">
            <h2 class="section-title">Filmes novos</h2>
            <p class="section-description">Veja as críticas dos ultimos filmes adicionados no Moviestar</p>
            <div class="movies-container">
                <?php foreach($latesMovies as $movie): ?>
                   <?php require("templates/movie_card.php");?>
                <?php endforeach;?>
                
            </div>
            <h2 class="section-title">Ação</h2>
            <p class="section-description">Veja os melhores filmes de Ação</p>
            <div class="movies-container">

            </div>
            <h2 class="section-title">Comedia</h2>
            <p class="section-description">Veja os melhores filmes de Comedia</p>
            <div class="movies-container">

            </div>
             <h2 class="section-title">Drama</h2>
            <p class="section-description">Veja os melhores filmes de Drama</p>
            <div class="movies-container">

            </div>
        </div>
<?php 
require_once("templates/footer.php");
?>
        