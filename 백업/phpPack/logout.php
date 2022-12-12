<?php
    session_start();
    unset($_SESSION['email']);
    //unset($_SESSION['nickname']);
    
    session_destroy(); // 세션 아이디의 삭제

    //require 'index.html';
    header("Location:../index.html");
?>