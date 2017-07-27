<?php

include "../seforimUtils/dbtop.php";

    /*deleting sefer*/
 
    function deleteSefer($nameDel,$conn){
        $nameDel = $_POST["deleteN"];
        $sql4 = "DELETE FROM `sefarimlist` WHERE name=:name";
        $statement = $conn->prepare($sql4);
        $statement ->bindValue(":name",$nameDel);
        $statement ->execute();
    } 
    /*inserting new sefer*/
    function insertSefer($nameNewSefer,$priceNewSefer,$conn){
        $sql3="INSERT INTO sefarimlist (name,price) VALUES (:theName,:thePrice)";
        $statement2 = $conn->prepare($sql3);
        $statement2->bindValue(":theName",$nameNewSefer);
        $statement2->bindValue(":thePrice",$priceNewSefer);
        $statement2->execute();
    }


    /*populating Select with sefarim names*/
    function populateSelect ($conn){
        $sql1 = "SELECT name FROM `sefarimlist` WHERE 1";
        $result = $conn->query($sql1);
        $sefarimNames = $result->fetchAll(PDO::FETCH_COLUMN);
        return $sefarimNames;
    }
    
    /*getting sefer info*/
        
    function getPrice($selected,$conn){
        $sql2 = "SELECT `price` FROM `sefarimlist` WHERE name = :theName";
        $statement = $conn->prepare($sql2);
        $statement->bindValue(":theName",$selected);
        $statement->execute(); 
        $seferPrice = $statement->fetch(PDO::FETCH_COLUMN);
        return $seferPrice;  
    }

?>
