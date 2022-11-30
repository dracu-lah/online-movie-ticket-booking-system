
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
                $amountTotal=120*$not;
        }else if($class == "secondClass"){
                $amountTotal=100*$not;
        }else if($class == "balcony"){
                $amountTotal=150*$not;
        }
        // connecting to database
        $cid = mysqli_connect("localhost", "root", "", "movie")or die("<script>alert('Error Connection'); window.location.href='update.html';</script>");
        // inserting values
        $sql_command ="UPDATE booking SET name_db='".$name."', ph_db='".$ph."', movie_name_db='".$movie_name."', date_db='".$date."', no_of_tickets_db='".$not."', screen_db='".$screen."', class_db='".$class."', amount_db='".$amountTotal."'  WHERE id='".$id."'";
        $action = mysqli_query($cid, $sql_command)or die("<script>alert('Updation Failed'); window.location.href='update.html';</script>");
        if($action){
                echo "<script>alert('Updated sucessfully'); window.location.href='update.html';</script>";
        }
        mysqli_close($cid);
    ?>
