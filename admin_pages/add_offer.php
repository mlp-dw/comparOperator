<?php
include '../utils/header_admin.php';
include '../utils/alert.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();
$getAllDestinations = $manager->getAllLocations();

?>

    <section id="admin-forms" class="d-flex flex-column align-items-center justify-content-center">
        <div id="scroll_to_top">
            <a href="#top"><i class="fas fa-arrow-alt-circle-up fa-inverse fa-2x"></i></a>
        </div>
        <div id="return">
            <a href="/comparOperator/admin.php" class="d-flex flex-row justify-content-around">
                <i class="fas fa-arrow-left fa-inverse fa-2x"></i>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form d-flex flex-column justify-content-center align-items-center">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Add Offer</h1>
                                </div>
                            </div>
                            <form action="/comparOperator/process/add_offer.php" method="POST" name="offer">
                                <div class="form-group d-flex flex-column">
                                    <label for="destination">Destination :</label>
                                    <select id="destination" name="destination" class="m-2">
                                        <option value="">-- Choose the Destination --</option>
                                        <?php foreach ($getAllDestinations as $destination) : ?>
                                            <option value="<?= $destination->getLocation(); ?>"><?= $destination->getLocation() ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="tour-operator">Tour Operator :</label>
                                    <select id="tour-operator" name="tour_operator_id" class="m-2">
                                        <option value="">-- Choose the Tour Operator--</option>
                                        <?php foreach ($getAllTO as $tour) : ?>
                                            <option value="<?= $tour->getId(); ?>"><?= $tour->getName(); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="price">Price :</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Your price here">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="m-2 btn btn-block mybtn btn-primary rounded-pill tx-tfm">Submit</button>
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