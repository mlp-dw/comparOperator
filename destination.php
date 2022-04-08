<?php include './utils/header.php';
$manager = new Manager();
$getOperatorsBydestination = $manager->getOperatorByDestination($_GET["location"]);
?>

<?php
        foreach ($getOperatorsBydestination as $destination) {
            $operator = $manager->getOperator($destination->getTourOperatorId());
            $getReviews = $manager->getAllReviewByOperatorId($operator->getId());
        ?>

            <div class="container">
            
                <div class="card card2">
                    <i class="fas fa-arrow-right" id="icon"></i>
                    <p class="to fs-6"><?=$operator->getName();?></p>
                    <div class="<?=$destination->getLocation()?>">
                        <h3><?=$destination->getLocation()?></h3>
                        <p><?=$destination->getPrice()?> ฿</p>
                        <?php
                            if($operator->getIsPremium() == 1){
                        ?>
                            <p><a target="_blank" href="<?=$operator->getLink()?>"><?=$operator->getName();?></a></p>
                        <?php
                            }else{
                        ?>
                            <p><?=$operator->getName();?></p>
                        <?php
                            }
                        ?>
                        <p><?=$operator->getGrade();?> / 5 (<?= $operator->getGradeCount();?> ratings)</p>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$destination->getTourOperatorId()?>" data-bs-whatever="@mdo"><i class="fas fa-arrow-right"></i></button>
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
                                        <h2><?=$review->getAuthor()?>:</h2>
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

<?php include './utils/footer.php';?>