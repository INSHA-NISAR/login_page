<?php

    session_start();
    header('location:login.php');       
    $server="cloud.sistec.ac.in";
    $username="0187cs181063";
    $password="sistec";
    $database = "0187cs181063";
               
    //creting connection
    $conn =mysqli_connect($server, $username, $password,$database);
    // if($conn) {
    //     echo "connection sucessful";
    // } else {
    //     echo "no connection ";
    // }   

    if(isset($_POST['user']) && isset($_POST['pswd'])) {
        
        $name =$_POST['user'];
        $pass =$_POST['pswd'];
        
        //print_r($_POST);exit();
    
        $q = "select *from test_loginform where username ='$name' && password = '$pass'";
        $result = mysqli_query($conn ,$q);
        $num =mysqli_num_rows($result);   

        if($num === 1) {
            echo "Username and Password already exist";
        } else {
            $qy ="insert into test_loginform( username, password) values( '$name', '$pass')";
            mysqli_query($conn,$qy);
            echo "Inserted successfully";
        }

    } else {
        echo "Please insert username and password";
    }
?>