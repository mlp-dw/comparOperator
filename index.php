<?php

include './header.php';

$manager = new Manager();

?>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="./js/css/login.css" rel="stylesheet">
<body>
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
                        <form action="" method="POST" name="tour_operator">
                            <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="set name">
                            <input type="text" name="link" class="form-control" id="link" aria-describedby="link" placeholder="set link">
                            <input type="radio" name="is_premium" class="form-control" id="is_premium" aria-describedby="is_premium">
                            <label for="Premium">Premium</label>                            
                            <input type="radio" name="is_premium" class="form-control" id="is_not_premium" aria-describedby="is_not_premium" >
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
</body>


<?php
include './footer.php';


?>


