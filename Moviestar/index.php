<?php 

require_once("templates/header.php");
require_once("dao/MovieDAO.php");

//Dao dos filmes

$movieDao = new MovieDAO($conn, $BASE_URL);

$latestMovies = $movieDao->getLatestMovies();

$actionMovies = $movieDao->getMoviesByCategory("Ação");

$comedyMovies = $movieDao->getMoviesByCategory("Comedia");

$dramaMovies = $movieDao->getMoviesByCategory("Drama");


?>
        <div id="main-container" class="container-fluid">
            <h2 class="section-title">Filmes novos</h2>
            <p class="section-description">Veja as críticas dos ultimos filmes adicionados no Moviestar</p>
            <div class="movies-container">
                <?php foreach($latestMovies as $movie): ?>
                   <?php require("templates/movie_card.php");?>
                <?php endforeach;?>
                <?php if(count($latestMovies) === 0):?>
                    <p class="empty-list">Ainda não há filmes cadastrados!</p>
                <?php endif;?>
                
            </div>
            <h2 class="section-title">Ação</h2>
            <p class="section-description">Veja os melhores filmes de Ação</p>
            <div class="movies-container">
                <?php foreach($actionMovies as $movie): ?>
                   <?php require("templates/movie_card.php");?>
                <?php endforeach;?>
                 <?php if(count($actionMovies) === 0):?>
                    <p class="empty-list">Ainda não há filmes de Ação cadastrados!</p>
                <?php endif;?>

            </div>
            <h2 class="section-title">Comedia</h2>
            <p class="section-description">Veja os melhores filmes de Comedia</p>
            <div class="movies-container">
                <?php foreach($comedyMovies as $movie): ?>
                   <?php require("templates/movie_card.php");?>
                <?php endforeach;?>
                 <?php if(count($comedyMovies) === 0):?>
                    <p class="empty-list">Ainda não há filmes de Comédia cadastrados!</p>
                <?php endif;?>

            </div>
             <h2 class="section-title">Drama</h2>
            <p class="section-description">Veja os melhores filmes de Drama</p>
            <div class="movies-container">
                <?php foreach($dramaMovies as $movie): ?>
                   <?php require("templates/movie_card.php");?>
                <?php endforeach;?>
                 <?php if(count($dramaMovies) === 0):?>
                    <p class="empty-list">Ainda não há filmes de Drama cadastrados!</p>
                <?php endif;?>

            </div>
        </div>
<?php 
require_once("templates/footer.php");
?>
        