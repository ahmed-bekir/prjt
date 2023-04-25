<?php
    
    include './dbconnect.php';
    
    if (!empty($_POST)){
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $age=$_POST['age'];
        $active=$_POST['ac'];

        
        $sql = "INSERT INTO prog (height, weight , age, active) VALUES (? , ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$height, $weight , $age , $active]);
        //redirection à index.php
        header('Location: index.php');
        exit();
    }
    $template="add";
    $pagetitle="Add page";
    include "./layout.phtml";
?>