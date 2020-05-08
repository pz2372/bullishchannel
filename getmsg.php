<style>
.paragraph {
  border: 1px solid #dedede;
  background-color: #9ab8ac;
  border-radius: 10px;
  padding: 10px;
  margin: 10px 0;
  width: auto;
  max-width: 400px;
  height: auto;
  max-height: 600px;
}
</style>

<?php 
session_start();
// connect to db and check connection
$db = mysqli_connect('localhost', 'root','','messages') 
    or die("Could not conect to database");
        // Select info from db
        $query = "SELECT username, msg, dt FROM message "; 
        // run query on db
        $result = mysqli_query($db, $query);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p class = 'paragraph'>" . '<span style= "color: green">' . $row["username"] . '</span>' . "  Time: ".  $row["dt"]. "<br>". $row["msg"]. "<br>".  "</p>";
                        
            }
    } else {
        echo "No messages";
    } 
        
       
           
    
?>