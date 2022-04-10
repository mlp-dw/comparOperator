
<?php
include './utils/header.php';
$manager = new Manager();
$distinctLocation = $manager->getAllLocations();
?>


<div class="main-background d-flex flex-row flex-wrap justify-content-center">

    <?php foreach($distinctLocation as $destination)
    {
    ?>
    <div>
        
        <div class="card">
            <input type="checkbox" id="card<?=$destination->getLocation();?>" class="more" aria-hidden="true">
            <div class="content">
                <div class="front" style="background-image: url('<?=$destination->getImage();?>')">
                    <div class="inner">
                        <h2 class="fw-bold"><?=$destination->getLocation();?></h2>
                        <label for="card<?=$destination->getLocation();?>" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span><?=$destination->getAdventure();?></span>
                            <div class="icon">
                                <i class="fa-solid fa-skull-crossbones"></i>
                                <span>Adventure</span>
                                <span>/5</span>
                            </div>
                        </div>
                        <div class="info">
                            <span><?=$destination->getFood();?></span>
                            <div class="icon">
                                <i class="fa-solid fa-steak"></i>
                                <span>Food</span>
                                <span>/5</span>
                            </div>
                        </div>
                        <div class="info">
                            <span><?=$destination->getRhum();?></span>
                            <div class="icon">
                                <i class="fa-solid fa-wine-bottle"></i>
                                <span>Rhum</span>
                                <span>/5</span>
                            </div>
                        </div>
                        <div class="info">
                            <span><?=$destination->getEarnMoney();?></span>
                            <div class="icon">
                                <i class="fa-solid fa-baht-sign"></i>
                                <span>Earn Money</span>
                                <span>/5</span>
                            </div>
                        </div>
                        <div class="description p-1 h-100 m-2 lh-sm">
                            <p class="fs-4"><?=$destination->getDescription();?></p>
                        </div>
                        <div class="location"><?=$destination->getLocation()?></div>
                        <label for="card<?=$destination->getLocation();?>" class="button return" aria-hidden="true">
                        <i class="fas fa-arrow-left"></i>
                        </label>
                        <a type="button" id="offer" href="/comparOperator/destination.php?location=<?=$destination->getLocation()?>" class="btn btn-primary">See all offers</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    }
    ?>
</div>

<?php include './utils/footer.php';?>



