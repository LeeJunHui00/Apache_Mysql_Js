<?php
    include("boardClass.php");
    
    #db 접속하기
    $sql_ID = new sql("113.198.230.37", "webdev_kdg", "111111", "webdb");
    $sql_ID->con_check();

    #보드값을 저장하고 있는 클래스 만들기
    #case 1 : 제목만
    $targetDB = "dap_notice";
    $dap_class = new notice ("비교과프로그램",1, $sql_ID->connect(), $targetDB);

    #case2 : 제목, 링크, 시간

    $targetDB = "dap_dorm";
    $dap_dorm_class = new notice ("기숙사공지",2, $sql_ID->connect(), $targetDB);
    $targetDB = "dap_edu";
    $dap_edu_class = new notice ("교육/모집",2, $sql_ID->connect(), $targetDB);
    $targetDB = "dap_haksa";
    $dap_haksa_class = new notice ("학사공지",2, $sql_ID->connect(), $targetDB);
    $targetDB = "dap_job";
    $dap_job_class = new notice ("취업공지",2, $sql_ID->connect(), $targetDB);
    $targetDB = "dap_scholarship";
    $dap_scholarship_class = new notice ("장학공지",2, $sql_ID->connect(), $targetDB);
    
    #case3 : 제목, 링크, 글쓴이, 시간
    $targetDB = "deu_3rd";
    $deu_3rd_class = new notice ("외부기관공고",3, $sql_ID->connect(), $targetDB);
        
    $targetDB = "deu_exchange";
    $exchange_class = new notice ("대외협력처",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_job";
    $job_class = new notice ("채용공고",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_lang";
    $lang_class = new notice ("국제언어교육원",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_main";
    $main_class = new notice ("동의대학교 공지",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_museum";
    $museum_class = new notice ("박물관",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_scholarship";
    $scholarship_class = new notice ("장학공지",3, $sql_ID->connect(), $targetDB);

    $targetDB = "deu_lib";
    $lib_class = new notice ("도서관공지",3, $sql_ID->connect(), $targetDB);


    function flexible_box($parent, $child){
        global$dap_class,   #php는 전역변수를 사용하기위해 함수의 안에서 다시 불러들여야한다
        $dap_dorm_class,
        $dap_edu_class,
        $dap_haksa_class,
        $dap_job_class,
        $dap_scholarship_class,
        $deu_3rd_class,
        $exchange_class,
        $job_class,
        $lang_class,
        $main_class,
        $museum_class,
        $scholarship_class,
        $lib_class;
        return 
        '<div class="menu-box block">
                <div id="menu-container'.$parent.'" class="menu-container">
                    <div id="menu-wrapper'.$parent.'" class="menu-wrapper" style="position: relative">
                        <div id="hamburger-menu'.$parent.'" class="hamburger-menu">
                            <span></span><span></span><span></span>
                        </div>
                        <!-- hamburger-menu -->
                    </div>
                    <!-- menu-wrapper -->
                    <ul class="menu-list accordion">
                        <li id="nav1'.$parent.'" class="toggle accordion-toggle nav1">
                            <span class="icon-plus"></span>
                            <a class="menu-link">DAP 시스템</a>
                        </li>
                        <!-- accordion-toggle -->
                        <ul class="menu-submenu accordion-content">
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_class'.$parent.'"
                                    >비교과프로그램</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="scholarship_class'.$parent.'"
                                    >장학 공지</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_haksa_class'.$parent.'"
                                    >학사 공지</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_job_class'.$parent.'"
                                    >취업 공지</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_edu_class'.$parent.'"
                                    >교육/모집</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_dorm_class'.$parent.'"
                                    >기숙사 공지</a
                                >
                            </li>
                        </ul>
                        <!-- menu-submenu accordon-content-->
                        <li id="nav2'.$parent.'" class="toggle accordion-toggle nav2">
                            <span class="icon-plus"></span>
                            <a class="menu-link">학교 공지</a>
                        </li>
                        <!-- accordion-toggle -->
                        <ul class="menu-submenu accordion-content">
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="main_class'.$parent.'"
                                    >동의대학교</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="deu_3rd_class'.$parent.'"
                                    >외부기관공고</a
                                >
                            </li>
                            <li>
                                <a onclick="functpe('.$parent.')" id="job_class'.$parent.'"
                                    >채용공고</a
                                >

                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="dap_scholarship_class'.$parent.'"
                                    >장학 공지</a
                                >
                            </li>
                        </ul>
                        <!-- menu-submenu accordon-content-->
                        <li id="nav3'.$parent.'" class="toggle accordion-toggle nav3">
                            <span class="icon-plus"></span>
                            <a class="menu-link">부속 기관</a>
                        </li>
                        <!-- accordion-toggle -->
                        <ul class="menu-submenu accordion-content">
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="exchange_class'.$parent.'"
                                    >대외협력처</a
                                >
                            </li>
                            <li>
                                <a onclick="functpe('.$parent.')" id="lang_class'.$parent.'"
                                    >국제언어교육원</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="museum_class'.$parent.'"
                                    >박물관</a
                                >
                            </li>
                            <li>
                                <a
                                    onclick="functpe('.$parent.')"
                                    id="lib_class'.$parent.'"
                                    >도서관</a
                                >
                            </li>
                        </ul>
                        <!-- menu-submenu accordon-content-->
                    </ul>
                    <!-- menu-list accordion-->
                </div>
                <div id="museum_class'.$parent.$child.'" style="display: none">
                    '.$museum_class->print().'
                </div>
                <div id="scholarship_class'.$parent.$child.'" style="display: none">
                    '.$scholarship_class->print().'
                </div>
                <div id="deu_3rd_class'.$parent.$child.'" style="display: none">
                    '.$deu_3rd_class->print().'
                </div>
                <div id="exchange_class'.$parent.$child.'" style="display: none">
                    '.$exchange_class->print().'
                </div>
                <div id="lang_class'.$parent.$child.'" style="display: none">
                    '.$lang_class->print().'
                </div>
                <div id="job_class'.$parent.$child.'" style="display: none">
                    '.$job_class->print().'
                </div>
                <div id="dap_edu_class'.$parent.$child.'" style="display: none">
                    '.$dap_edu_class->print().'
                </div>
                <div id="dap_job_class'.$parent.$child.'" style="display: none">
                    '.$dap_job_class->print().'
                </div>
                <div id="dap_haksa_class'.$parent.$child.'" style="display: none">
                    '.$dap_haksa_class->print().'
                </div>
                <div id="dap_dorm_class'.$parent.$child.'" style="display: none">
                    '.$dap_dorm_class->print().'
                </div>
                <div
                    id="dap_scholarship_class'.$parent.$child.'" style="display: none">
                    '.$dap_scholarship_class->print().'
                </div>
                <div
                    id="dap_class'.$parent.$child.'" style="display: none">
                    '.$dap_class->print().'
                </div>
                <div
                    id="lib_class'.$parent.$child.'" style="display: none">
                    '.$lib_class->print().'
                </div>
                <div
                    id="main_class'.$parent.$child.'" style="display: none">
                    '.$main_class->print().'
                </div>

            </div>';
    }

?>