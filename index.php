
<?php
include './utils/header.php';
$manager = new Manager();
$showDestinations = $manager->getAllDestinations();
$distinctLocation = $manager->getAllLocations();
?>
<div class="d-flex flex-row flex-wrap justify-content-center">
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

</div>

<?php include './utils/footer.php';?>



