<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>폼 유효성 체크</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myForm").validate({
                rules: {
                    name: "required",
                    age: {
                        required: true,
                        number: true
                    },
                    userId: "required",
                    password: "required",
                    passwordC: {
                        required: true,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    home: {
                        url: true
                    },
                    check: "required"
                },
                messages: {
                    name: "이름을 입력하세요.",
                    age: {
                        required: "나이를 입력하세요.",
                        number: "숫자로만 입력하세요."
                    },
                    userId: "아이디를 입력하세요.",
                    password: "비밀번호를 입력하세요.",
                    passwordC: {
                        required: "비밀번호 확인을 입력하세요.",
                        equalTo: "비밀번호 확인이 잘못되었습니다."
                    },
                    email: {
                        required: "이메일을 입력하세요.",
                        email: "이메일 형식이 잘못되었습니다."
                    },
                    home: {
                        url: "올바른 인터넷 주소 형식이 아닙니다."
                    },
                    check: "약관 동의에 체크하세요."
                }
            });
        });
    </script>
    <style>
        #myForm label {
            display: inline-block;
            width: 180px;
        }

        p > label {
            width: 100px;
        }
    </style>
</head>
<body>
<h2>폼 유효성 체크 플러그인</h2>
<form id="myForm" class="cmxform">
    <fieldset>
        <legend>회원가입</legend>
        <p>
            <label for="name">이름 *</label>
            <input id="name" type="text" name="name">
        </p>
        <p>
            <label for="age">나이 *</label>
            <input id="age" type="text" name="age">
        </p>
        <p>
            <label for="userId">아이디 *</label>
            <input id="userId" type="text" name="userId">
        </p>
        <p>
            <label for="password">비밀번호 *</label>
            <input id="password" type="password" name="password">
        </p>
        <p>
            <label for="passwordC">비밀번호 확인 *</label>
            <input id="passwordC" type="password" name="passwordC">
        </p>
        <p>
            <label for="email">이메일 *</label>
            <input id="email" type="email" name="email">
        </p>
        <p>
            <label for="home">홈페이지/블로그</label>
            <input id="home" type="url" name="home">
        </p>
        <p>
            <label for="joinNews">뉴스레터 가입</label>
            <input id="joinNews" type="checkbox" name="joinNews">
        </p>
        <p>
            <label>뉴스레터 관심분야</label>
            <input id="new" type="checkbox" name="new">
            <label class="lab" for="new">신간도서 안내</label>
            <input id="movie" type="checkbox" name="movie">
            <label for="movie">개봉 영화 안내</label>
        </p>
        <p>
            <label for="check">약관동의 *</label>
            <input id="check" type="checkbox" name="check">
        </p>
        <p>
            <input class="submit" type="submit">
        </p>
    </fieldset>
</form>
</body>
</html>