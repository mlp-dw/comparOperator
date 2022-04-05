<?php include './utils/header.php';
$manager = new Manager();
$getAllOperators = $manager->getOperatorByDestination($_GET["location"]);
?>


<div class="d-flex justify-content-center my-5">
    <table class="align-items-center justify-content-center w-50 table table-info table-striped text-center">
        <thead >
            <tr>
                <th scope="col">Island</th>
                <th scope="col">Price</th>
                <th scope="col">Tour Operator</th>
                <th scope="col">Rating</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        
        <?php
        foreach ($getAllOperators as $operator) {
            ?>
            <tbody class="w-50">
                <tr>
                    <td><?=$operator->getLocation()?></td>
                    <td><?=$operator->getPrice()?></td>
                    <td><?=$manager->getOperator($operator->getTourOperatorId())->getName();?></td>
                    <td><?=$manager->getOperator($operator->getTourOperatorId())->getGrade();?> (<?= $manager->getOperator($operator->getTourOperatorId())->getGradeCount();?> reviews)</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$operator->getTourOperatorId()?>" data-bs-whatever="@mdo">Comment here</button></td>
                </tr>
            </tbody>
            <!-- ----------------------------------------------------------------------------------------------------------------------
            MODAL COMMENT -->
            <div class="modal fade" id="exampleModal<?=$operator->getTourOperatorId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="tour_operator_id" value="<?=$operator->getTourOperatorId()?>">
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
            
                </div>
              </div>
            </div>
            <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <?php
        }
    ?>
    </table>
</div>
<?php include './utils/footer.php';?>