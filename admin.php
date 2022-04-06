<?php include './utils/header_admin.php';
include './utils/alert.php';
?>


   <h1 class="text-center p-3 m-3">Welcome Administrator</h1>

   <div class="d-flex flex-row justify-content-center">
      <a class="btn btn-primary m-3" href="/comparOperator/admin_pages/add_tourOperator.php">Add Tour Operator</a>
      <a class="btn btn-primary m-3" href="/comparOperator/admin_pages/add_destination.php">Add Destination</a>
      <a class="btn btn-dark m-3" href="/comparOperator/admin_pages/add_offer.php">Add Offer</a>
      <a class="btn btn-primary m-3" href="/comparOperator/admin_pages/pass_premium.php">Pass Premium</a>
   </div>
   
   <h3 class="text-center p-3 m-3">Leave Administrator Mode</h3>

   <div class="d-flex flex-row justify-content-center">
      <a class="btn btn-danger m-3" href="/comparOperator/index.php">User Mode</a>
   </div>

<?php include './utils/footer_admin.php';?>