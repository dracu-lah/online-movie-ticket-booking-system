
    <?php
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
        $sql_command ="insert into booking values(NULL,'".$name."', '".$ph."', '".$movie_name."', '".$not."', '".$screen."', '".$class."' )";
        $action = mysqli_query($cid, $sql_command);
        if($action==1){
            echo "<script>alert('inserted sucessfully'); window.location.href='index.html';</script>";
        }else{
            echo "<script>alert('insertion failed'); window.location.href='index.html';</script>";
        }
        mysqli_close($cid);
    ?>
