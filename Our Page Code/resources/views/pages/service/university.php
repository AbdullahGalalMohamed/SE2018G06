<?php
//$mysqli = new mysqli("localhost", "root", "", "study");

    $link=mysqli_connect("localhost","root","","study");

    $query="SELECT * FROM country WHERE id=1";

    /*if ($result = $mysqli->query("SELECT  name FROM country WHERE id= 1 ")) {
        printf("Select returned %d rows.\n", $result->num_rows);
    
        /* free result set 
        $result->close();
    }*/

    $country_name = mysqli_query($link,$query);
    $row= mysqli_fetch_array($country_name);
    //print_r($row->name) ;
    echo $row['id'];
    echo $row['name'];
    echo $row['the_currency'];
    echo $row['time'];
?>


