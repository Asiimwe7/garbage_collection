<?php
require_once("inc/db_connection.php");


$q="SELECT * FROM user";

// execute the query
$results=mysqli_query($conn,$q);

//Test if executed or not
if($results){
    if(mysqli_num_rows($results)>0){
        $users=mysqli_fetch_all($results,MYSQLI_ASSOC);
        echo json_encode(
            array(
                "success"=>"",
                "users"=>$users
            )
        );
    }else{
        echo json_encode(
            array(
                "error"=>"No users in your search"
            )
        );
    }
}
else{
    // error loading user
    // display error in json format
    echo json_encode(
        array(
            "error"=>"Error loading users"
        )
    );
}


