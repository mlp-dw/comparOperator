<?php
include './utils/header.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();
var_dump($getAllTO);
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Add TourOperator</h1>
                                </div>
                            </div>
                            <form action="process/add_to.php" method="POST" name="tour_operator">
                                <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="set name">
                                <input type="text" name="link" class="form-control" id="link" aria-describedby="link" placeholder="set link">
                                <input type="checkbox" value="1" name="is_premium" class="form-control" id="is_premium" aria-describedby="is_premium">
                                <label for="Premium">Premium</label>                            
                                <input type="checkbox" value="0" name="is_premium" class="form-control" id="is_not_premium" aria-describedby="is_not_premium" >
                                <label for="Premium">Not Premium</label>
                                </div>
                                <div class="col-md-12 text-center ">
                                    <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">add new tour operator</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>ADD DESTINATION</h2>
        <form action="process/add_destination.php" method="POST" name="destination">
            <div class="form-group">
                <label for="location">Location :</label>
                <input type="text" name="location" class="form-control" id="location" placeholder="Your location here">
                <label for="price">Price :</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Your price here">
                <select name="tour_operator-id">
                    <?php foreach ($getAllTO as $tour) : ?>
                        <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">create</button>
        </form>
                    
    </section>


<?php
include './utils/footer.php';
?>


