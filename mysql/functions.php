<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 07-Oct-18
 * Time: 8:25 PM
 */

include "db.php";




function showAllData(){
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed'. mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];

        echo "<option value=\"$id\">$id</option>";

    }
}