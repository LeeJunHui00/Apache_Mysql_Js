<?php
    $db_host="113.198.230.37";  
    $db_user="webdev_sjh";
    $db_passwd="111111";
    $db_name="login_info";

    $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

    

    $s_id = $_POST['s_Id'];  //signin.html파일에서 입력 값 받기
    $s_pass = $_POST['s_Pass']; 
    $s_email=$_POST['s_Email'];
    $s_major=$_POST['s_Major'];
    
    if($conn){
        $sql = "INSERT INTO info (id,pass,email,major) VALUES ('$s_id','$s_pass','$s_email','$s_major')";
        mysqli_query($conn, $sql);
        //require 'index.html';
        header("Location:../index.html");
    }
    else{
        echo "fail";
    }
    mysqli_close($conn);
?>