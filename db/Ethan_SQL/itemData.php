<?php
    $servername = "localhost";
    $username = "EthanLin";
    $password = "Ab123456cD";
    $dbName = "my_sql_db";

    // Make connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    // Check connection
    if($conn -> connect_error) {
        die("Connection Failed! ". mysqli_connect_error());
    }
    // echo("Connection success.");

    $sql = "SELECT id, username, lat, lon, whatime FROM my_sql_db_table";
    // $result = mysqli_query($conn, $sql);
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        // Show data of each row
        while($row = $result -> fetch_assoc()) {
            echo "id: ".$row['id'] . " username: ".$row['username'] . " lat: ".$row['lat'] . " lon: ".$row['lon'] . " whatime: ".$row['whatime'] . "<br>";
        }
    } else {
        echo "0 results";
    }

//    if (mysqli_num_rows($result) > 0) {
//        // Show data foreach row
//        echo("total data ". mysqli_num_rows($result));
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            // echo "ID: ".$row['ID'] . " USERNAME: ".$row['USERNAME'] . " LOCATION_LAT: ".$row['LOCATION_LAT'] . " LOCATION_LON: ".$row['LOCATION_LON'] . " DATETIME: ".$row['DATETIME'] . "<br>";
//        }
//    } else {
//        echo("There is no data!!!");
//    }
?>