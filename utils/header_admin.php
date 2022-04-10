<?php session_start();
include __DIR__ . "/../config/db.php";
include __DIR__ . "/../config/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="/comparOperator/assets/css/style.css">
  <link rel="stylesheet" href="/comparOperator/assets/css/destination_style.css">
  <title>comparOperator</title>
</head>

<body>

  <header>
    <div class="bg-dark collapse" id="navbarHeader"></div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="/comparOperator/admin.php">
            <img src="/comparOperator/img/onepieceperator.png" class="img-fluid w-50" alt="">
          </a>
          <?php if(isset($_SESSION['pseudo'])){?>
            <a href="/comparOperator/process/logout.php" class="text-white fs-4"><?=$_SESSION['pseudo'];?> disconnection</a>
          <?php } ?>
        </div>
      </div>
  </header>