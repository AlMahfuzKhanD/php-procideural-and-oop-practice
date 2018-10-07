<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 07-Oct-18
 * Time: 8:25 PM
 */

include "db.php";



function createRows(){
    if(isset($_POST['submit'])){

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        /*if($username && $password){
            echo $username;
            echo $password;
        }else{
            echo "Please enter information";
        }*/

        /* $connection = mysqli_connect('localhost','root','','loginapp');
         if($connection){
             echo "we are connected";
         }else{
             die("Database connection failed");
         }*/


        $query = "INSERT INTO users (username, password)";
        $query .= "VALUES ('$username', '$password' )";

        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query Failed'. mysqli_error($connection));
        }else{
            echo "Data Inserted";
        }



    }
}


function readRows(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query Failed'. mysqli_error($connection));
    }



    while($row = mysqli_fetch_assoc($result)){

      print_r($row);

    }
}


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





function updateTable(){
    if(isset($_POST['submit'])){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username',";
        $query .= "password = '$password'";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query Failed'. mysqli_error($connection));
        }else{
            echo "Data Updated";
        }

    }

}



function deleteRows(){
    if(isset($_POST['submit'])){
        global $connection;

        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query Failed'. mysqli_error($connection));
        }else{
            echo "Data Deleted";
        }
    }
}