<?php
     session_start();
    // if (!isset($_SESSION['username'])) {
    //    header('Location: ./login.php');
    //     exit();
    // }
    //connexion à la base de données
    include './dbconnect.php';
    //requete update
    if (!empty($_POST)){
        //récupération des données saisies
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $age=$_POST['age'];
        $active=$_POST['active'];
        //réception de id
        $id = $_POST['id'];
        
        $sql = "UPDATE pog 
                SET
                id = :id,
                height = :height,
                weight = :weight,
                age = :age,
                active = :active,
                WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':id', $id);
                $query->bindValue(':height', $height);
                $query->bindValue(':weight', $weight);
                $query->bindValue(':age', $age);
                $query->bindValue(':active', $active);
                $query->execute();

                header('Location: index.php');
                exit;
        }
    



    //requete selection données de la base des données
    $query = $pdo->prepare('SELECT * FROM prog WHERE id= ?');
    $query->execute([$_GET['id']]);
    $event = $query->fetch();




    $template="edit";
    $pagetitle="edit page";
    include "./layout.phtml";
?>