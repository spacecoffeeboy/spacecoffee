<?include("top.php");?>
    <script>
        function k1(){
            if(f1.sno.value == ""){ 
            alert("학번을 입력해주세요!");
            f1.sno.focus();
            return false;
            }
            if(f1.sname.value == ""){ 
            alert("이름을 입력해주세요!");
            f1.sname.focus();
            return false;
            }
        }   
    </script>

        <section>
        <div align="center">
        <h2>성적 입력 프로그램</h2>
        </div>
        <div align="center">
            <form name="f1" action="form_ok.php" method="get" onsubmit="return k1()">
            <table border="1">
            <tr><td> 학  번</td><td><input type=text name=sno></td></tr>
            <tr><td> 이  름</td><td><input type=text name=sname></td></tr>
            <tr><td> 국  어</td><td><input type=text name=kor></td></tr>
            <tr><td> 영  어</td><td><input type=text name=eng></td></tr>
            <tr><td> 수  학</td><td><input type=text name=math></td></tr>
            <tr><td> 역  사</td><td><input type=text name=hist></td></tr>
            <tr><td colspan="2" align="center">
            <input type=submit value="저장하기">&emsp;
            <input type=reset value="다시작성">
            </td>
            </tr>
            </table>
            </form>   
        </div>
        <br>    
        </section>
    </body>
<?include("bottom.php");?>