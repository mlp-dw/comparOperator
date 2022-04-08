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
                                    <h1>GO PREMIUM</h1>
                                </div>
                            </div>
                            <form action="../process/update_premium.php" method="POST" name="premium">
                                <div class="form-group">
                                    <Label>Choose a Tour Operator</Label>
                                    <select name="tour_operator_id">
                                        <option value="">--Choose a Tour Operator--</option>
                                        <?php foreach ($getAllTO as $tour) : 
                                            if($tour->getIsPremium() == 0){ ?>
                                            <option value="<?= $tour->getId() ?>"><?= $tour->getName() ?></option>
                                        <?php } endforeach; ?>
                                    </select>
                                <div class="col-md-12 text-center m-3">
                                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">premuim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include '../utils/footer_admin.php';?>