<?php if (isset($_GET['error'])) {?>
    <div class="alert alert-danger m-0" role="alert">
        <?= $_GET['error']?>
    </div>
<?php } ?>
<?php if (isset($_GET['success'])) {?>
    <div class="alert alert-success m-0" role="alert">
        <?= $_GET['success']?>
    </div>
<?php } ?>