<?php 
  if(!session_id()){  //세션이 실행되어 있는지 여부를 체크합니다.
    session_name('테스트세션');  //기본적으로 세션의 이름은 PHPSESSID 입니다.
    session_start();  //세션 시작 
  }

  $db_host="113.198.230.37";  
  $db_user="webdev_sjh";
  $db_passwd="111111";
  $db_name="login_info";

  $conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

  $email = $_POST['i_Email'];  //index.html파일에서 id 값 받기
  $pass = $_POST['i_Pass'];    

  if ( !is_null( $email ) ) {
    $email_sql = "SELECT * FROM info WHERE id = '$email'&& pass='$pass'";  //데이터베이스상에 입력값과 동일한 값이 있는지 확인 
    if($email_result = mysqli_fetch_array(mysqli_query( $conn, $email_sql ))){ 
      $_SESSION['mail'] = $email; //세션에 key value 등록합니다.
      //$_SESSION['nickname'] = '관리자';
      //require 'main.html';  //일치하는 값이 있다면 main.html로 이동
      echo $_SESSION['mail'];
      header("Location:main.html");
    }
    else{
      echo "<script>alert(\"존재하지 않는 아이디/비밀번호 입니다.\");</script>";
      //require 'index.html';   //일치하는 값이 없다면 로그인 재시도
      header("Location:index.html");
    }
}
?>


