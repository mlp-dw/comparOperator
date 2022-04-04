<?php
include './utils/header.php';
$manager = new Manager();
$showDestinations = $manager->getAllDestinations();
?>


<?php 
foreach($showDestinations as $destination)
        {?>

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <div class="location"><?=$destination->getLocation();?></div>
        <div class="price"><?=$destination->getPrice();?></div>

        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
    <?php };?>

<?php include './utils/footer.php';?>


