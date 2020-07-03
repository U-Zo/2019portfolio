<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>form validation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script>
        $(function () {
            $("#vForm").validate({
                rules: {
                    uname: "required",
                    age: {
                        required: true,
                        digits: true
                    },
                    pwd: {
                        required: true,
                        minlength: 8,
                        maxlength: 16
                    },
                    re_pwd: {
                        required: true,
                        equalTo: "#pwd"
                    },
                    web: {
                        required: true,
                        url: true
                    },
                    news: {
                        required: "#news: checked",
                        minlength: 2
                    },
                    agree: "required"
                },

                messages: {
                    uname: "이름은 필수 입력 항목입니다.",
                    age: {
                        required: "나이를 입력해 주세요",
                        digits: "숫자만 가능합니다."
                    },
                    pwd: {
                        required: "비밀번호를 입력해 주세요",
                        minlength: "{0}자 이상으로 입력해 주세요.",
                        maxlength: "{0}자 이하로 입력해 주세요"
                    },
                    re_pwd: {
                        required: "비밀번호를 한번 더 입력해주세요",
                        equalTo: "비밀번호가 같지 않습니다."
                    },
                    web: {
                        required: "이메일을 입력해 주세요",
                        url: "이메일 형식이 올바르지 않습니다."

                    },
                    news: {
                        required: "뉴스는 선택필수",
                        minlength: "최소 {0}개 선택해 주세요"
                    },
                    agree: "약관 동의에 체크해 주세요."
                }

            });

        });
    </script>
</head>
<body>
<form id="vForm">
    <p>이름 : <input name="uname" type="text"></p>
    <p>나이 : <input name="age" type="text"></p>
    <p>비번 : <input name="pwd" type="password" id="pwd"></p>
    <p>확인 : <input name="re_pwd" type="password"></p>
    <p>홈피 : <input name="web" type="text">
    <p>구독 : <input type="checkbox" name="news" id="news">신간
        <input type="checkbox" name="news" id="news">영화
        <input type="checkbox" name="news" id="news">음반</p>
    <p>동의 : <input name="agree" type="checkbox"></p>
    <p><input type="submit" value="Submit"></p>
</form>
</body>
</html>