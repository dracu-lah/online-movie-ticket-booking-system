
    <?php
        $id =$_POST['id'];
        $name = $_POST['name'];
        $ph = $_POST['phone_no'];
        $movie_name = $_POST['movie_name'];
        $not = $_POST['select'];
        $screen = $_POST['screen'];
        $class = $_POST['radio2'];
        $date = $_POST['date'];
        $amountTotal = 0;
        if($class == "firstClass"){
                if($not==1){
                        $amountTotal=120*$not;
                }else if($not==2){
                        $amountTotal=120*$not;
                }else if($not==4){
                        $amountTotal=120*$not;
                }else if($not==8){
                        $amountTotal=120*$not;
                }
        }else if($class == "secondClass"){
                if($not==1){
                        $amountTotal=100*$not;
                }else if($not==2){
                        $amountTotal=100*$not;
                }else if($not==4){
                        $amountTotal=100*$not;
                }else if($not==8){
                        $amountTotal=100*$not;
                }
        }else if($class == "balcony"){
                if($not==1){
                        $amountTotal=150*$not;
                }else if($not==2){
                        $amountTotal=150*$not;
                }else if($not==4){
                        $amountTotal=150*$not;
                }else if($not==8){
                        $amountTotal=150*$not;
                }
        }
        //echo "$name $ph $movie_name $not $screen $class";
        //connecting to database
        $cid = mysqli_connect("localhost", "root", "", "movie");
        //if(!$cid){
                //echo "connection error";
        //}else{
                //echo "connection sucessfull<br>";
        //}
        
        //inserting values
        $sql_command ="UPDATE booking SET name_db='".$name."', ph_db='".$ph."', movie_name_db='".$movie_name."', date_db='".$date."', no_of_tickets_db='".$not."', screen_db='".$screen."', class_db='".$class."', amount_db='".$amountTotal."'  WHERE id='".$id."'";
        $action = mysqli_query($cid, $sql_command);
        if($action==1){
            echo "<script>alert('updated sucessfully'); window.location.href='update.html';</script>";
        }else{
            echo "<script>alert('updation failed'); window.location.href='update.html';</script>";
        }
        mysqli_close($cid);
    ?>
