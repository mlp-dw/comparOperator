<?php include './utils/header_admin.php';
include './utils/alert.php';

if(isset($_SESSION["pseudo"])){
   ?>
   <section class="content p-3 d-flex flex-column align-items-center justify-content-center">
      <div class="box bg-2 w-50">
         <div class="mx-auto text-center text-dark d-flex flex-column align-items-center justify-content-center">
            <h1 class="m-3">Welcome Administrator</h1>
            <h2 class="m-3"><?=$_SESSION["pseudo"];?></h2>
         </div>
         <div class="text-center text-dark d-flex flex-column">
            <a class="d-flex justify-content-center" href="/comparOperator/admin_pages/add_tourOperator.php">
               <button class="button button2 button--wayra button--border-thin button--round-s">Add Tour Operator</button>
            </a>
            <a class="d-flex justify-content-center" href="/comparOperator/admin_pages/add_destination.php">
               <button class="button button2 button--wayra button--border-thin button--round-s">Add Destination</button>
            </a>
            <a class="d-flex justify-content-center" href="/comparOperator/admin_pages/add_offer.php">
               <button class="button button2 button--wayra button--border-thin button--round-s">Add Offer</button>
            </a>
            <a class="d-flex justify-content-center" href="/comparOperator/admin_pages/pass_premium.php">
               <button class="button button2 button--wayra button--border-thin button--round-s">Pass Premium</button>
            </a>
         </div>
      </div>
   </section>
   <?php
}else{
   ?>
   <section id="admin-forms" class="d-flex flex-column align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form d-flex flex-column justify-content-center align-items-center">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Connection</h1>
                                </div>
                            </div>
                              <form action="/comparOperator/process/login.php" method="POST">
                                 <div class="form-group d-flex flex-column">
                                    <label for="pseudo">Pseudo :</label>
                                    <input type="text" name="pseudo" class="form-control m-2" id="pseudo" placeholder="Your pseudo here">
                                    <label for="password">Password :</label>
                                    <input type="password" name="password" class="form-control m-2" id="password" placeholder="Your password here">
                                 </div>
                                 <div class="col-md-12 text-center">
                                       <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary rounded-pill tx-tfm">Submit</button>
                                 </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
	<?php
}
include './utils/footer_admin.php';?>