<?php
    
    $booking_id = $_POST["booking_id"];

    $cid = mysqli_connect("localhost", "root", "", "movie");
    //if (!$cid){
        //echo "Connection error";
    //}else{
        //echo "Connected";
    //}
    $sql_command="delete from booking where id = $booking_id";
    $action = mysqli_query($cid, $sql_command);
    if($action==1){
            echo "<script>alert('deleted sucessfully'); window.location.href='delete.html';</script>";
        }else {
            echo "<script>alert('deletion failed'); window.location.href='delete.html';</script>";
        }
        mysqli_close($cid);
    
?>
