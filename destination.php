<?php include './utils/header.php';
$manager = new Manager();
$getOperatorsBydestination = $manager->getOperatorByDestination($_GET["location"]);

function starRating($operator){
    switch ($operator->getGrade()) {
        case '0':
            ?>
            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            <?php
            break;
        case '1':
            ?>
            <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            <?php
            break;
        case '2':
            ?>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            <?php
            break;
        case '3':
            ?>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            <?php
            break;
        case '4':
            ?>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
            <?php
            break;
        case '5':
            ?>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <?php
            break;
        default:
            "error";
            break;
    }
}

function ispremiumTour($operator){
    if($operator->getIsPremium() == 1){
        ?>
        <p class="fw-bold px-3"><a class="link-dark" target="_blank" href="<?=$operator->getLink()?>">👑 <?=$operator->getName();?></a></p>
        <?php
    }else{
        ?>
        <p class="fw-bold px-3"><?=$operator->getName();?></p>
        <?php
    }       
}
?>
    <section class="fond">
        <div id="scroll_to_top">
            <a href="#top"><i class="fas fa-arrow-alt-circle-up fa-inverse fa-2x"></i></a>
        </div>
        <div id="return">
            <a href="/comparOperator/index.php" class="d-flex flex-row justify-content-around">
                <i class="fas fa-arrow-left fa-inverse fa-2x"></i>
                <i class="fas fa-solid fa-umbrella-beach fa-inverse fa-2x"></i>
            </a>
        </div>
        <?php
        foreach ($getOperatorsBydestination as $destination) {
            $operator = $manager->getOperator($destination->getTourOperatorId());
            $getReviews = $manager->getAllReviewByOperatorId($operator->getId());
        ?>

            <div class="container d-flex flex-column align-items-center">
            
                <div class="card card2">
                    <i class="fas fa-arrow-right" id="icon"></i>
                    <p class="to fw-bold"><?=$operator->getName();?></p>
                    <div class="d-flex flex-column no-wrap <?=$destination->getLocation()?>">
                        <div class="w-50 h-100 backg">
                            <h3 class="fw-bold px-3 py-1" ><?=$destination->getLocation()?></h3>
                            <p class="fw-bold px-3"><?=$destination->getPrice()?> ฿</p>
                            <?=ispremiumTour($operator)?>
                            <p class="star px-3"><?=starRating($operator)?> (<?= $operator->getGradeCount();?>)</p>

                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$destination->getTourOperatorId()?>" data-bs-whatever="@mdo"></button>
                </div>

                  <!-- ----------------------------------------------------------------------------------------------------------------------
                MODAL COMMENT -->
                <div class="modal fade" id="exampleModal<?=$destination->getTourOperatorId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Your review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/comparOperator/process/add_review.php" method="post">
                                    <div class="mb-3">
                                        <label for="author" class="col-form-label">Pseudo:</label>
                                        <input type="text" name="author" id="author" placeholder="Enter your pseudonym here" class="form-control">
                                    </div>
                                    <input type="hidden" name="tour_operator_id" value="<?=$destination->getTourOperatorId()?>">
                                    <input type="hidden" name="id-destination" value="<?=$destination->getId()?>">
                                    <div class="mb-3">
                                        <label for="message" class="col-form-label">Message:</label>
                                        <textarea name="message" class="form-control" id="message" placeholder="Write your comment here"></textarea>
                                    </div>
                                    <label for="rating">Rating:</label>
                                    <input type="hidden" name="count" value="1">
                                    <select name="rating" id="rating">
                                        <option value="">--Rate--</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                    
                                    <div class="my-3">
                                        <button type="submit" class="btn btn-primary">Send message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="m-3">
                                <div data-bs-spy="scroll" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                    <?php foreach ($getReviews as $review)
                                    { 
                                    ?>
                                        <div>
                                            <h6><?=$review->getAuthor()?>:</h6>
                                            <p><?=$review->getMessage()?>:</p>
                                        </div>
                                    <?php
                                    } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL-------------------------------------------------------------------------------------------------------------------- -->
            </div>
        <?php
        }
        ?>
    </section>
<?php include './utils/footer.php';?>