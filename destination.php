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
                    <td></td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Comment here</button>
</td>
                </tr>
            </tbody>
        <?php
        }
    ?>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <button type="submit" class="btn btn-primary">Send message</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include './utils/footer.php';?>