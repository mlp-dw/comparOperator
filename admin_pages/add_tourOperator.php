<?php include '../utils/header_admin.php';
include '../utils/alert.php';
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
                <div class="admin-form col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form d-flex flex-column justify-content-center align-items-center">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Add Tour Operator</h1>
                                </div>
                            </div>
                            <form action="/comparOperator/process/add_to.php" method="POST" name="tour_operator">
                                <div class="form-group d-flex flex-column">
                                    <label for="name">Name :</label>
                                    <input type="text" name="name" class="form-control m-2" id="name" placeholder="set name">
                                    <label for="link">Link :</label>
                                    <input type="text" name="link" class="form-control m-2" id="link" placeholder="set link">
                                    <label for="link">Premium :</label>
                                    <div class="form-check m-2">
                                            <input class="form-check-input" type="checkbox" value="1" name="is_premium" id="premium">
                                            <label class="form-check-label rounded-pill" for="premium">
                                                Premium
                                            </label>
                                        </div>
                                    <div class="col-md-12 text-center my-2">
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