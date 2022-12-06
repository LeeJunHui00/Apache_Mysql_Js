<?php
    include("boardClass.php");
    $sql_ID = new sql("113.198.230.37", "webdev_kdg", "111111", "webdb");
    $sql_ID->con_check();
    $targetDB = "dap_notice";
    $dap_class = new notice
        ("비교과프로그램", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_3rd";
    $deu_3rd_class = new notice
        ("외부기관공고", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_exchange";
    $exchange_class = new notice
        ("대외협력처", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_job";
    $job_class = new notice
        ("채용공고", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_lang";
    $lang_class = new notice
        ("국제언어교육원", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_main";
    $main_class = new notice
        ("동의대학교 공지", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_museum";
    $museum_class = new notice
        ("박물관", $sql_ID->connect(), $targetDB);
    $targetDB = "deu_scholarship";
    $scholarship_class = new notice
        ("장학 공지", $sql_ID->connect(), $targetDB);
?>