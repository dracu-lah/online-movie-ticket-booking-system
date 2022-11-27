    <?php
        $id = $_POST['id'];
        $name = $_POST['name'];
        $ph = $_POST['phone_no'];
        $movie_name = $_POST['movie_name'];
        $not = $_POST['select'];
        $screen = $_POST['screen'];
        $class = $_POST['radio2'];
        
        
        


        //echo "$name $ph $movie_name $not $screen $class";
        //connecting to database
        $cid = mysqli_connect("localhost", "root", "", "movie");
        //if(!$cid){
                //echo "connection error";
        //}else{
                //echo "connection sucessfull<br>";
        //}
        
        //inserting values
        $sql_command ="UPDATE `booking` SET `name_db`='".$name."',`ph_db`='".$ph."',`movie_name_db`='".$movie_name."',`no_of_tickets_db`='".$not."',`screen_db`='".$screen."',`class_db`='".$class."' WHERE id=$id";
        $action = mysqli_query($cid, $sql_command);
                if($action==1){
            echo "<script>alert('updated sucessfully'); window.location.href='update.html';</script>";
        }else {
            echo "<script>alert('updation failed'); window.location.href='update.html';</script>";
        }
        mysqli_close($cid);
    ?>
