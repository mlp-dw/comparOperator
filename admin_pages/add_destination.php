<?php
include '../utils/header_admin.php';
include '../utils/alert.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();

?>

    <section id="admin-forms">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>ADD DESTINATION</h1>
                                </div>
                            </div>
                            <form action="../process/add_destination.php" method="POST" name="destination">
                                <div class="form-group d-flex flex-column">
                                    <label for="location">Location :</label>
                                    <input type="text" name="location" class="form-control m-2" id="location" placeholder="Your location here">
                                    <label for="price">Price :</label>
                                    <input type="text" name="price" class="form-control m-2" id="price" placeholder="Your price here">
                                    <label for="tour-operator">Tour Operator :</label>
                                    <select id="tour-operator" name="tour_operator_id" class="m-2">
                                        <?php foreach ($getAllTO as $tour) : ?>
                                            <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="image">Image :</label>
                                    <input type="text" name="image" placeholder="http://...." class="m-2" id="image">
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../utils/footer_admin.php';?>