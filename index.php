
<?php
include './utils/header.php';
$manager = new Manager();
$showDestinations = $manager->getAllDestinations();
?>

<?php 
foreach($showDestinations as $destination)
{?>

<a href="/comparOperator/destination.php?location=<?=$destination->getLocation()?>">
    <div class="image" style="width: 18rem;">
        <img src="<?=$destination->getImage();?>" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="location">Destination : <?=$destination->getLocation();?></div>
        </div>
    </div>
</a>
    <?php };?>
<?php include './utils/footer.php';?>



