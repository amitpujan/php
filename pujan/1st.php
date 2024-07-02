<?php

    try{
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $photo=$_POST['photo'];
    
    $Remarks=$_POST['Remarks'];
    $stock=0;
    
    $server="localhost";
    $username="root";
    $password="";
    $db="pujan";

    $query="INSERT INTO `itementry`(`Item Nmae`, `Price`, `Stock`, `Remarks`) VALUES ('$itemname','$price',$stock,'$Remarks')";
    
    $con=mysqli_connect($server,$username,$password,$db);
    $result=mysqli_query($con,$query);

    if(!$result){
        die("error");
    }
    else {
        echo "data entered succesfully";
    }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>