<?php
include '../utils/header_admin.php';
include '../utils/alert.php';
$manager = new Manager();
$getAllTO = $manager->getAllOperator();

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
                        <div class="myform form d-flex flex-column justify-content-center">
                            <div class="logo mb-3">
                                <div class="text-center">
                                    <h1>Go Premium</h1>
                                </div>
                            </div>
                            <form action="/comparOperator/process/update_premium.php" method="POST" name="premium">
                                <div class="form-group d-flex flex-column">
                                    <select class="my-5" name="tour_operator_id">
                                        <option value="">-- Choose the Tour Operator to Upgrade --</option>
                                        <?php foreach ($getAllTO as $tour) : 
                                            if($tour->getIsPremium() == 0){ ?>
                                            <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                                        <?php } endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-12 text-center m-3">
                                    <button type="submit" class="m-2 btn btn-block mybtn btn-primary rounded-pill tx-tfm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include '../utils/footer_admin.php';?>