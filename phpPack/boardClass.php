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
        if (!$this->connect) {
            die("서버와의 연결 실패! : ".mysqli_connect_error());
         }
         else{
             echo "서버와의 연결 성공!";
         }
        }
    }
    #table때오는 커멘드
    class notice{
        public $boardName;
        public $sql_con;    #sql->connect 넣기
        public $sql_dbname; #접속할 db이름 넣기
        public $sql_commend;#select 명령어 저장
        public $sql_data;   #query의 결과물 넣기
        public function __construct($name, $sql_con, $sql_dbname){
            $this->boardName = $name;
            $this->sql_con = $sql_con;
            $this->sql_commend = "SELECT * FROM ".$sql_dbname." LIMIT 5;";
            $this->sql_data = mysqli_query($sql_con, $this->sql_commend);
        }
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
            $str_li = '';
            while( $main_row = $this->get_row() ){
                $str_li = $str_li.
                    '<li>
                        <a class="menu-box-tab" href="'.$main_row['link'].'">
                            <div class="menu-box-value">'.$main_row['title'].'</div>
                        </a>
                    </li>';
            }
            return $str_li;
        }
        public function get_rows_dap(){ //dap는 제목만 출력
            $str_li = '';
            while( $main_row = $this->get_row() ){
                $str_li = $str_li.
                '<li>
                    <a class="menu-box-tab">
                    <div class="menu-box-value">'.$main_row['title'].'</div>
                    </a>
                </li>';
            } 
            return $str_li;
        }
        public function print(){    #포스트잇 안에 정보들 출력
            echo
            '
            <h2 class="titular">'.$this->boardName.'</h2>
            <ul class="menu-box-menu">
            '.$this->get_rows().'
            </ul>';
        }
        public function print_dap(){    #포스트잇 안에 정보
            echo
            '
            <h2 class="titular">'.$this->boardName.'</h2>
            <ul class="menu-box-menu">
            '.$this->get_rows_dap().'
            </ul>';
        }
    }