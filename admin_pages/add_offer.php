<?php
include '../utils/header_admin.php';
include '../utils/alert.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();
$getAllDestinations = $manager->getAllLocations();

?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>ADD OFFER</h1>
                                </div>
                            </div>
                            <form action="../process/add_offer.php" method="POST" name="offer">
                                <div class="form-group d-flex flex-column">
                                    <label for="location">Destination :</label>
                                    <select id="location" name="destination" class="m-2">
                                        <?php foreach ($getAllDestinations as $destination) : ?>
                                            <option value="<?= $destination->getLocation() ?>"><?= $destination->getLocation() ?></option>
                                            <?php endforeach; ?>
                                            <input type="hidden" name="image" value="<?=$destination->getImage()?>">
                                    </select>
                                    <label for="tour-operator">Tour Operator :</label>
                                    <select id="tour-operator" name="tour_operator" class="m-2">
                                        <?php foreach ($getAllTO as $tour) : ?>
                                            <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="price">Price :</label>
                                    <input type="text" name="price" class="form-control m-2" id="price" placeholder="Your price here">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../utils/footer_admin.php';?>