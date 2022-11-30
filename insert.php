
    <?php
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
        $cid = mysqli_connect("localhost", "root", "", "movie")or die("<script>alert('Error Connection'); window.location.href='index.html';</script>");
        // inserting values
        $sql_command ="insert into booking values(NULL,'".$name."', '".$ph."', '".$movie_name."', '".$date."','".$not."', '".$screen."', '".$class."' , '".$amountTotal."')";
        $action = mysqli_query($cid, $sql_command)or die("<script>alert('Insertion Failed'); window.location.href='index.html';</script>");
        if($action){
                echo "<script>alert('inserted sucessfully'); window.location.href='index.html';</script>";
        }
        mysqli_close($cid);
    ?>
