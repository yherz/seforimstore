<?php
if(!empty($_GET["min"]) && !empty($_GET["max"])){
    $minPrice = ($_GET["min"]);
    $maxPrice = ($_GET["max"]);
    $filter = true;

}
else{
     $filter = false;
     $minPrice = null;
     $maxPrice = null;
}
    include "../seforimModels/userModel.php";
    include "../seforimViews/userView.php";


?>