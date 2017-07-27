<?php
include "../seforimUtils/dbtop.php";

    /*populating Select with sefarim names*/
    function populateTable ($conn,$filter,$minPrice,$maxPrice){
    $sqlSelectAll = "SELECT * FROM `sefarimlist`";
        if($filter===true){
            $sqlSelectAll.= "WHERE price BETWEEN :min AND :max";
            $statement = $conn->prepare($sqlSelectAll);
            $statement->bindValue(":min",$minPrice);
            $statement->bindValue(":max",$maxPrice);
        }
        else{
          $sqlSelectAll.= "WHERE 1";
           $statement =$conn->prepare($sqlSelectAll);
        }

    $statement->execute();

    $sefarimAll = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $sefarimAll;
    }
?>
