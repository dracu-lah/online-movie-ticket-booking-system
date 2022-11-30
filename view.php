<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Movieflix</title>
  </head>
  <body>
    <style>
      * {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      body {
        background-image: url(https://cdn.arstechnica.net/wp-content/uploads/2022/07/netflix-800x450.jpg);
      }
      table {
        border: none;
        padding: 10px;
        background-color: #dc3535;
      }
      td {
	padding: 10px;
	text-align:center;
      }

      thead,
      tfoot {
        background-color: #333;
        color: #fff;
      }

      th {
        padding: 30px 300px;
      }

      table {
        margin: auto;
        margin-top: 50px;
      }

      .fields {
        width: 180px;
      }

      .text {
        padding: 10px;
        width: 450px;
        border-radius: 5px;
        border: none;
      }
      select {
        padding: 10px;
        width: 470px;
        border-radius: 5px;
        border: none;
        text-align: center;
      }

      .radio1 {
        margin-left: 100px;
        margin-right: 100px;
      }
      .radio2 {
        margin-left: 40px;
        margin-right: 30px;
      }

      .btn {
        padding: 20px;
        width: 400px;
        border: none;
        border-radius: 10px;
        color: white;
        background-color: #333;
      }
      .btn:hover {
        background-color: lightslategray;
      }
      .settings {
        padding: 20px;
        width: 70px;
        border: none;
        border-radius: 10px;
        color: white;
        background-color: #333;
        text-align: center;
      }
      .settings:hover {
        background-color: lightslategray;
      }

      .btnContainer {
        text-align: center;
        margin-top: 20px;
      }
      .fields {
          padding: 5px;
          background-color: #333;
      }
    </style>
    <form action="">
      <table>
        <thead>
          <tr>
            <th colspan="9">Booked movies</th>
          </tr>
          <tr>
            <th class="fields">id</th>
            <th class="fields">Name</th>
            <th class="fields">Ph no</th>
            <th class="fields">Movie name</th>
            <th class="fields">Date</th>
            <th class="fields">N o t</th>
            <th class="fields">Screen</th>
            <th class="fields">Class</th>
             <th class="fields">Amount</th>
             
          </tr>
        </thead>
        <tbody>
            <?php
            // connecting to mysql and movie database
            $cid = mysqli_connect("localhost", "root", "", "movie")or die("<script>alert('Error Connection'); window.location.href='update.html';</script>");
            //Showing data from database
            $sql_command = "select * from booking";
            $action = mysqli_query($cid, $sql_command)or die("<script>alert('Error Retrieving Data'); window.location.href='update.html';</script>");
            while ($line = mysqli_fetch_assoc($action)){
                    echo "<tr><td>".$line["id"]."</td><td>".$line["name_db"]."</td><td>".$line["ph_db"]."</td><td>".$line["movie_name_db"]."</td><td>".$line["date_db"]."</td><td>".$line["no_of_tickets_db"]."</td><td>".$line["screen_db"]."</td><td>".$line["class_db"]."</td><td>".$line["amount_db"]."</td></tr>";
            } 
                    mysqli_close($cid);
        ?>
          <tr>
            <td colspan="9">
              <div class="btnContainer">
                <input
                  class="settings"
                  type="button"
                  value="others"
                  onClick="location.href='others.html'"
                />
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </form>


  </body>
</html>
