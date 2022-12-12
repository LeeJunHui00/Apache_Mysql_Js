boardClass.php
    클래스 구현부분 입니다.
    sql접속을 위한 클래스
    board정보를 저장하기 위한 클래스를 정의했습니다.
    
    dap의 DB는 title만 가지고 있기 때문에
        print(), print_dap()와 같이 dap인지 아닌지를 기준으로 함수를 나누었습니다.

phpBoardSet.php
    boardClass를 include하고 있습니다.
    생성한 객체들
        $deu_3rd_class  //외부기관
        $exchange_class //대외협력처
        $job_class      //채용공고
        $lang_class     //국제언어교육원
        $main_class     //동의대 메인페이지 공지사항
        $museum_class   //박물관
        $scholarship_class   //장학공지

    dap소속
        $dap_class      //비교과
        $dap_dorm_class //dap기숙사
        $dap_edu_class  //교육
        $dap_haksa_class//학사
        $dap_job_class  //취업
        $dap_scholarship_class//장학

사용방법
<?php
    include("phpPack/boardSet.php");
?>

$객체이름->print(); print하나로 통일!