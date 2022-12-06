<html>

<head>
    <title> Main_Page </title>
    <style>
    .user_table_info {
        display: flex;
        align-items: center;
    }

    .user_table_btn {
        display: flex;
        align-items: center;
    }
    </style>
</head>

<body>
    <h2>
        <center> Create Account
    </h2>
    <div class="user_table_info">
        <form class="mytable" method="post" action="print_table.php">
            <table border=1 bordercolor="black" width=1000 cellspacing=1 cellpadding=5>

                <tr>
                    <td width=150 align=center> 아이디 </td>
                    <td width=300>
                        <input type="text" size=20 maxlength=20 name="id">
                    </td>

                    <td width=150 align=center> 성명 </td>
                    <td width=300>
                        <input type="text" size=15 maxlength=12 name="name">
                    </td>
                </tr>

                <tr>
                    <td align=center> 비밀번호 </td>
                    <td>
                        <input type="password" size=20 maxlength=20 name="pw1">
                    </td>

                    <td align=center> 비밀번호 확인 </td>
                    <td>
                        <input type="password" size=20 maxlength=20 name="pw2">
                    </td>
                </tr>

                <tr>
                    <td align=center> 핸드폰 </td>
                    <td>
                        <select name="p1">
                            <option value=" "> 선택 </option>
                            <option value="010 "> 010 </option>
                            <option value="011 "> 011 </option>
                            <option value="016 "> 016 </option>
                            <option value="017 "> 017 </option>
                            <option value="019 "> 019 </option>
                        </select>
                        <input type="text" size=4 name="p2" maxlength=4>
                        <input type="text" size=4 name="p3" maxlength=4>
                    </td>
                </tr>

                <tr>
                    <td align=center> 이메일 주소 </td>
                    <td colspan=3>
                        <input type="text" size=60 name="email">
                    </td>
                </tr>

            </table><br>
    </div>

    <div class="user_table_btn">
        <table border=0 width=800>
            <tr>
                <td align=center>
                    <input type="submit" value="회원 등록">
                    <input type="reset" value="다시 작성">
                </td>
            </tr>
        </table>

        <input type="hidden" name="thema" value="회원 등록 서식">
    </div>


    </form>
    </center>
</body>

</html>