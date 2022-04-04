<?php include '../utils/header_admin.php';?>

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
                            <form action="../process/add_to.php" method="POST" name="tour_operator">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="set name">
                                    <label for="">Link</label>
                                    <input type="text" name="link" class="form-control" id="link" aria-describedby="link" placeholder="set link">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="is_premium" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Premium
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" name="is_premium" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Normal
                                        </label>
                                    </div>                       
                                    <div class="col-md-12 text-center ">
                                        <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">add new tour operator</button>
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