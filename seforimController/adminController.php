 <?php

 include "../seforimModels/adminModel.php";

  if(isset($_POST["deleteB"])){
     $nameDel=$_POST["deleteN"];
    deleteSefer($nameDel,$conn);
 };

  if(isset($_POST['insert'])){
     insertSefer($_POST['name1'],$_POST['price'],$conn);
     $seferName=$_POST['name1'];
     $seferPrice=$_POST['price'];
     $did = true;
 };

 if(isset($_POST["getPrice"])){
    $seferPrice=getPrice($_POST["name"],$conn);
 };

$sefarimNames=populateSelect ($conn);

 include "../seforimViews/adminView.php";
 ?>