 <?php

 include "../seforimModels/adminModel.php";


$deleted = false;
$inserted = false;
$gotPrice = false;

  if(isset($_POST["deleteB"])){
     $nameDel=$_POST["deleteN"];
    deleteSefer($nameDel,$conn);
    $deleted = true;
 };

  if(isset($_POST['insert'])){
     insertSefer($_POST['name1'],$_POST['price'],$conn);
     $seferName=$_POST['name1'];
     $seferPrice=$_POST['price'];
     $inserted = true;
 };

 if(isset($_POST["getPrice"])){
    $seferPrice=getPrice($_POST["name"],$conn);
    $gotPrice = true;
 };

$sefarimNames=populateSelect ($conn);

 include "../seforimViews/adminView.php";
 ?>