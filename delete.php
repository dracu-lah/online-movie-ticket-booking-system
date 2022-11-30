<?php
    
    $booking_id = $_POST["booking_id"];

    $cid = mysqli_connect("localhost", "root", "", "movie")or die("<script>alert('Error Connection'); window.location.href='delete.html';</script>");
    $sql_command="delete from booking where id = $booking_id";
    $action = mysqli_query($cid, $sql_command)or die("<script>alert('Deletion Failed'); window.location.href='delete.html';</script>");
    if($action){
        echo "<script>alert('Deleted sucessfully'); window.location.href='delete.html';</script>";
    }
        mysqli_close($cid);
    
?>
