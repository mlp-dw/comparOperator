<?php include './utils/header.php';
$manager = new Manager();
$getAllDestinations = $manager->getOperatorByDestination($_GET["location"]);
?>


<div class="d-flex justify-content-center my-5">
    <table class="align-items-center justify-content-center w-50 table table-info table-striped text-center">
        <thead >
            <tr>
                <th scope="col">Island</th>
                <th scope="col">Price</th>
                <th scope="col">Tour Operator</th>
                <th scope="col">Rating</th>
            </tr>
        </thead>
        
        <?php
        foreach ($getAllDestinations as $destination) {
            ?>
            <tbody class="w-50">
                <tr>
                    <td><?=$destination->getLocation()?></td>
                    <td><?=$destination->getPrice()?></td>
                    <td><?=$manager->getOperator($destination->getTourOperatorId())->getName();?></td>
                    <td></td>
                </tr>
            </tbody>
        <?php
        }
    ?>
    </table>
</div>

<?php include './utils/footer.php';?>