<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'connection.php';
    createPerson();
}


function createPerson(){

        global $conn;
        global $pt_id;
        global $type;

if(isset($_REQUEST["pt_id"])){
    $pt_id=$_REQUEST["pt_id"];
}
if(isset($_REQUEST["Type"])){

    $type=$_REQUEST["Type"];

}



    $sql = "INSERT INTO person_type (pt_id,Type)
VALUES ('$pt_id','$type')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

        echo $pt_id;
        echo $type;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}





?>