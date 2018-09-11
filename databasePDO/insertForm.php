
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
        <script>
            function submitBtn() {
                var getName = $('#name').val()
                var getAge = $('#age').val()
                var Btn = $('#subBtn')
                if(getName == "") {
                    $('#checkName').html("이름을 입력해주세요.")
                    $('#checkName').attr("class", "fBlue")
                }
                if(getAge == "") {
                    $('#checkMessage').html("나이를 입력해주세요.")
                    $('#checkMessage').attr("class", "fBlue")
                }
                if(getName != "" && getAge != "") {
                    Btn.submit();
                }
            }
        </script>
        <style>
            li {
                list-style: none;
            }
            .fBlue {
                color: red;
            }
            
        </style>
    </head>
    <body>
        <form method="post" action="member_insert.php">
            <ul>
                <li>
                    <label>이름:
                        <input type="text" name="name" id="name" placeholder='이름'>
                    </label>
                </li>
                 <li id="checkName"></li>
                <li>
                    <label>나이:
                        <input type="text" name="age" id="age" placeholder='나이'>
                    </label>
                    <li id="checkMessage"></li>
                </li>
                <li>성별:
                    <label><input type="radio" name="gender" value="남" checked>남성</label>
                    <label><input type="radio" name="gender" value="여">여성</label>
                </li>
                <li><input type="button" onclick="submitBtn()" id="subBtn" value="추가"></li>
            </ul>
        </form>
    </body>
</html>
