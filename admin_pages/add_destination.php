<?php
include '../utils/header_admin.php';
include '../utils/alert.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();

?>

    <section id="admin-forms1" class="d-flex flex-column align-items-center justify-content-center">
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
                <div class="col-md-8 mx-auto">
                    <div id="first">
                        <div class="myform form d-flex flex-column justify-content-center">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Add Destination</h1>
                                </div>
                            </div>
                            <form action="/comparOperator/process/add_destination.php" method="POST" name="destination">
                                <div class="form-group d-flex flex-column">
                                    <label for="location">Location :</label>
                                    <input type="text" name="location" class="form-control my-2" id="location" placeholder="Your location here">

                                    <label for="price">Price :</label>
                                    <input type="text" name="price" class="form-control my-2" id="price" placeholder="Your price here">

                                    <label for="description">Description :</label>
                                    <textarea name="description" id="description" cols="30" rows="10"  placeholder="Write something about the destination..."></textarea>

                                    <label>Adventure :</label>
                                    <div class="d-flex flex-row justify-content-around">
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="0" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                0
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="1" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="2" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="3" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="4" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="5" name="adventure" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                5
                                            </label>
                                        </div>                       
                                    </div>
                                    <label>Food :</label>
                                    <div class="d-flex flex-row justify-content-around">
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="0" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                0
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="1" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="2" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="3" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="4" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="5" name="food" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                5
                                            </label>
                                        </div>                       
                                    </div>
                                    <label>Rhum :</label>
                                    <div class="d-flex flex-row justify-content-around">
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="0" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                0
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="1" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="2" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="3" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="4" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="5" name="rhum" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                5
                                            </label>
                                        </div>                       
                                    </div>
                                    <label>Earn Money :</label>
                                    <div class="d-flex flex-row justify-content-around">
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="0" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                0
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="1" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="2" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="3" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                3
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="4" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                4
                                            </label>
                                        </div>
                                        <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="5" name="earn_money" id="flexCheckDefault">
                                            <label class="form-check-label rounded-pill" for="flexCheckDefault">
                                                5
                                            </label>
                                        </div>                       
                                    </div>

                                    <label for="tour-operator">Tour Operator :</label>
                                    <select id="tour-operator" name="tour_operator_id" class="my-2">
                                        <?php foreach ($getAllTO as $tour) : ?>
                                            <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    
                                    <label for="image">Image :</label>
                                    <input type="text" name="image" placeholder="http://....  .jpg" class="my-2" id="image">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class="m-2 btn btn-block mybtn btn-primary rounded-pill tx-tfm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../utils/footer_admin.php';?>