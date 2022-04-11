<?php session_start(); 
include "../config/autoload.php";

$pseudo = htmlspecialchars($_POST["pseudo"]);
$password = htmlspecialchars($_POST["password"]); 
$isPseudo = isset($pseudo) && !empty($pseudo);
$isPassword = isset($password) && !empty($password);

function createSession($admin){
    $_SESSION['pseudo'] = $admin["pseudo"];
    $_SESSION['password'] = $admin["password"];
    $_SESSION["id"] = $admin["id"];
}

if($isPseudo && $isPassword){
    $manager = new Manager();
    $admin = $manager->logAdmin($pseudo, sha1($password));
    createSession($admin);

    if (!$admin) {
        header("Location: ../admin.php"); 
    }else{
        header("Location: ../admin.php");
    }     
}else{
    header("Location: ../index.php");
}
?>