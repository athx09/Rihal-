<?php


session_start();
if(isset($_SESSION['password'])){
	
    if($_SESSION['type'] == "customer"){
        
        $id = $_SESSION['customer_id'];
        


         $placeid = isset($_GET['place_id']) && is_numeric($_GET['place_id']) ? intval($_GET['place_id']) : 0;
        include('connect.php');  
        $sqlPL = $con->prepare("SELECT * FROM places_likes WHERE place_id='$placeid' AND customer_id='$id'");      
        $sqlPL->execute();
        $rowsPL = $sqlPL->fetchAll();
        $countPL=$sqlPL->rowCount();
        if($countPL > 0){ 

            header('Location:destination.php?message1=You Are Like this place Before!');


        }else{


            $sql = "INSERT INTO places_likes (place_id , customer_id) VALUES ('$placeid' , '$id')";

             $con->exec($sql);

             header('Location:destination.php?message1=You Are Like this place successfully!');


        }
        
    }else{
    
        header('Location:destination.php?message1=You Must Login As A Customer!');
    
    
    }}else{

header('Location:signin.php?message1=You Must Login Before!');

}


    ?>     