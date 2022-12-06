boardClass.php
    클래스 구현부분 입니다.
    sql접속을 위한 클래스
    board정보를 저장하기 위한 클래스를 정의했습니다.
    
    dap의 DB는 title만 가지고 있기 때문에
        print(), print_dap()와 같이 dap인지 아닌지를 기준으로 함수를 나누었습니다.

phpBoardSet.php
    boardClass를 include하고 있습니다.
    생성한 객체들
        $dap_class      //비교과
        $deu_3rd_class  //외부기관
        $exchange_class //대외협력처
        $job_class      //채용공고
        $lang_class     //국제언어교육원
        $main_class     //공지사항
        $museum_class   //박물관
        $scholarship_class   //장학공지

사용방법
<?php
    include("phpPack/boardSet.php");
?>

title과 ul li를 포함한 print함수
<?php
    $dap_class->print_dap();
?>
<?php
    $deu_3rd_class->print();
?>
<?php
    $exchange_class->print();
?>
<?php
    $job_class->print();
?>
<?php
    $lang_class->print();
?>
<?php
    $main_class->print();
?>
<?php
    $museum_class->print();
?>
<?php
    $scholarship_class->print();
?>