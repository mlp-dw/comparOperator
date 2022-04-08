<?php include './utils/header_admin.php';
include './utils/alert.php';
?>


   <h1 class="text-center text-light p-3 m-3">Welcome Administrator</h1>

   <div class="admin-buttons">
      <a href="/comparOperator/admin_pages/add_tourOperator.php">
         <button class="button button--wayra button--border-thin button--round-s m-3">Add Tour Operator</button>
      </a>
      <a href="/comparOperator/admin_pages/add_destination.php">
         <button class="button button--wayra button--border-thin button--round-s m-3">Add Destination</button>
      </a>
      <a href="/comparOperator/admin_pages/add_offer.php">
         <button class="button button--wayra button--border-thin button--round-s m-3">Add Offer</button>
      </a>
      <a href="/comparOperator/admin_pages/pass_premium.php">
         <button class="button button--wayra button--border-thin button--round-s m-3">Pass Premium</button>
      </a>
   </div>
			
   



<?php include './utils/footer_admin.php';?>