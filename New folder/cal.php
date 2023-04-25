<?php   
    session_start();
    //var_dump($_SESSION)
    //var_dump($_SESSION);

    // if (!isset($_SESSION['username'])) {
    //    header('Location: ./login.php');
    //    exit();
    // }
    include './dbconnect.php';
    $query= $pdo->prepare("SELECT * FROM prog ORDER BY age ");
    $query->execute();
    // var_dump($query);
        
    $events = $query->fetchAll();
    //var_dump($etudiant);
    $template="index";
    $pagetitle="home page";
    include "./layout.phtml";
?>
 