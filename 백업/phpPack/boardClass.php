<?php
    #sql접속 관리 클래스
    class sql{
        public $servername;
        public $user;
        public $password;
        public $db;
        public $connect;
        public function __construct
        ($servername, $user, $password, $db){
            $this->servername=$servername;
            $this->user=$user;
            $this->password=$password;
            $this->db=$db;
            $this->connect=mysqli_connect($servername, $user ,$password ,$db);
        }
        public function connect(){
            return mysqli_connect
            ($this->servername, $this->user ,$this->password ,$this->db);
        }
        public function con_check(){
        }
    }
    #table때오는 커멘드
    class notice{
        public $boardName;
        public $sql_con;    #sql->connect 넣기
        public $sql_dbname; #접속할 db이름 넣기
        public $sql_commend;#select 명령어 저장
        public $sql_data;   #query의 결과물 넣기
        public $str_li;     #공지 한 줄 뽑아오기
        public $case;       #어떤 쿼리를 부를 것인가
        public function get_row(){  #하나의 행을 가져오고 더 있으면 true
            return mysqli_fetch_array($this->sql_data);
            /*
            while( $main_row = mysqli_fetch_array($result) ){
            echo
                '<p>'
                .$main_row['title']
                .$main_row['writer']
                .$main_row['date']
                .'</p>';
            } 형태로 이용하기
            */
        }
        public function get_rows(){ //행 출력 str로 반환
            switch($this->case){
                case 1:
                    while( $main_row = $this->get_row() ){
                        $this->str_li = $this->str_li.
                        '<li>
                            <a class="menu-box-tab">
                            <div class="menu-box-value">'.$main_row['title'].'</div>
                            </a>
                        </li>';
                    }
                break;
                case 2:
                    while( $main_row = $this->get_row() ){
                        $this->str_li = $this->str_li.
                        '<li>
                            <a class="menu-box-tab" href="'.$main_row['link'].'">
                            <div class="menu-box-value">'.$main_row['title'].'</div>
                            </a>
                        </li>';
                    }
                break;
                case 3:
                    while( $main_row = $this->get_row() ){
                    $this->str_li = $this->str_li.
                        '<li>
                            <a class="menu-box-tab" href="'.$main_row['link'].'">
                                <div class="menu-box-value">'.$main_row['title'].'</div>
                            </a>
                        </li>';
                    }
                break;
            }
        }
        public function print(){    #포스트잇 안에 정보들 출력
            $str = 
            '
            <h2 class="titular">'.$this->boardName.'</h2>
            <ul class="menu-box-menu">
            '.$this->str_li.'
            </ul>';
            return $str;
        }
        public function __construct($name,$case, $sql_con, $sql_dbname){
            $this->boardName = $name;
            $this->case = $case;
            $this->sql_con = $sql_con;
            $this->sql_commend = "SELECT * FROM ".$sql_dbname." LIMIT 5;";
            $this->sql_data = mysqli_query($sql_con, $this->sql_commend);
            $this->str_li = '';
            $this->get_rows();
        }
    }
?>