
<?php
include './utils/header.php';
$manager = new Manager();
$distinctLocation = $manager->getAllLocations();
?>
<!-- <div class="d-flex flex-row flex-wrap justify-content-center">
    <?php foreach($distinctLocation as $destination)
    {
    ?>
        <a href="/comparOperator/destination.php?location=<?=$destination->getLocation()?>" class="text-decoration-none">
            <div class="m-4" style="width: 18rem;">
                <img src="<?=$destination->getImage();?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h3 class="link-dark text-center"><?=$destination->getLocation();?></h3>
                </div>
            </div>
        </a>
    <?php 
    }
    ?>

</div> -->


<div class="d-flex flex-row flex-wrap justify-content-center">

    <?php foreach($distinctLocation as $destination)
    {
    ?>
    <div>
        
        <div class="card">
            <input type="checkbox" id="card<?=$destination->getLocation();?>" class="more" aria-hidden="true">
            <div class="content">
                <div class="front" style="background-image: url('<?=$destination->getImage();?>')">
                    <div class="inner">
                        <h2><?=$destination->getLocation();?></h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <label for="card<?=$destination->getLocation();?>" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span>5</span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                                <span>people</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>4</span>
                            <div class="icon">
                                <i class="fas fa-door-open"></i>
                                <span>rooms</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>3</span>
                            <div class="icon">
                                <i class="fas fa-bed"></i>
                                <span>beds</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>1</span>
                            <div class="icon">
                                <i class="fas fa-bath"></i>
                                <span>bath</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
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



