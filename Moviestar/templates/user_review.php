<?php 

require_once("models/User.php");

$userModel = new User();

$fullName = $userModel->getFullName($review->user);

//checar se o filme tem imagem
if($review->user->image == ""){
    $review->user->image = "user.png";
}

?>
<div class="col-md-12 review">
                <div class="row">
                    <div class="col-md-1">
                        <div class="profile-image-container review-image" style="background-image:url('<?= $BASE_URL?>img/users/<?=$review->user->image ?>');"></div>
                    </div>
                    <div class="col-md-9 autor-details-container">
                        <h4 class="author-name">
                            <a href="#"><?=$fullName?></a>
                        </h4>
                        <p><i class="fas fa-star"><?= $review->rating?></i></p>
                    </div>
                    <div class="col-md-12">
                        <p class="coment-title">Comentario:</p>
                        <p><?= $review->review?></p>
                    </div>
                </div>
            </div>