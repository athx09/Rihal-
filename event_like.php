<?php


session_start();
if(isset($_SESSION['password'])){
	
    if($_SESSION['type'] == "customer"){
        
        $id = $_SESSION['customer_id'];
        


         $eventid = isset($_GET['event_id']) && is_numeric($_GET['event_id']) ? intval($_GET['event_id']) : 0;
        include('connect.php');  
        $sqlPL = $con->prepare("SELECT * FROM events_likes WHERE event_id='$eventid' AND customer_id='$id'");      
        $sqlPL->execute();
        $rowsPL = $sqlPL->fetchAll();
        $countPL=$sqlPL->rowCount();
        if($countPL > 0){ 

            header('Location:events.php?message1=You Are Like this event Before!');


        }else{


            $sql = "INSERT INTO events_likes (event_id , customer_id) VALUES ('$eventid' , '$id')";

             $con->exec($sql);

             header('Location:events.php?message1=You Are Like this event successfully!');


        }
        
    }else{
    
        header('Location:events.php?message1=You Must Login As A Customer!');
    
    
    }}else{

header('Location:signin.php?message1=You Must Login Before!');

}


    ?>     