<?php
include './utils/header.php';
$manager = new Manager();
$showDestinations = $manager->getAllDestinations();
?>

<a href="">
<?php 
foreach($showDestinations as $destination)
        {?>

<div class="image" style="width: 18rem;">
    <img src="<?=$destination->getImage();?>" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="location">Destination : <?=$destination->getLocation();?></div>
        <div class="price">Prix : <?=$destination->getPrice();?></div>

        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
    <?php };?>
</a>
<?php include './utils/footer.php';?>


