<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>jQuery validation plug-in</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#signupForm").validate({
                rules: {
                    age: {
                        required: true,
                        digits: true
                    },
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5,
                        maxlength: 16
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                messages: {
                    age: {
                        requried: "Please enter your age",
                        digits: "Please enter the just number"
                    },
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "비밀번호는 최소 {0}글자 입니다.", //rules - password 값의 0번째 인덱스값 불러오는
                        maxlength: "비밀번호는 최대 {0}글자 입니다."
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy",
                }
            });
        });
    </script>
    <style>
        #commentForm label {
            width: 250px;
        }
        #signupForm {
            width: 670px;
        }
    </style>
</head>
<body>
<div id="main">
    <h1>폼 유효성 체크 플러그인</h1><hr></br>
    <form class="cmxform" id="signupForm">
        <fieldset>
            <legend>Validating a complete form</legend>
            <p>
                <label for="firstname">이름 *</label>
                <input id="firstname" name="firstname" type="text">
            </p>
            <p>
                <label for="username">나이 *</label>
                <input id="username" name="username" type="text">
            </p>
            <p>
                <label for="id">아이디 *</label>
                <input id="id" name="id" type="text">
            </p>
            <p>
                <label for="password">비밀번호 *</label>
                <input id="password" name="password" type="password">
            </p>
            <p>
                <label for="confirm_password">비번확인*</label>
                <input id="confirm_password" name="confirm_password" type="password">
            </p>
            <p>
                <label for="email">이메일 *</label>
                <input id="email" name="email" type="email">
            </p>
            <p>
                <label for="homepage">홈페이지/블로그</label>
                <input id="homepage" name="homepage" type="email">
            </p>
            <p>
                <label for="agree">뉴스레터 가입</label>
                가입합니다.<input type="checkbox" class="checkbox" id="agree" name="agree">
            </p>
            <p>
                <label for="agree2">뉴스레터 관심분야</label>
                신간도서 안내&nbsp<input type="checkbox" class="checkbox" id="agree2" name="agree2">
                개봉 예정 영화&nbsp<input type="checkbox" class="checkbox" id="agree3" name="agree2">
                새로 발매된 음반&nbsp<input type="checkbox" class="checkbox" id="agree4" name="agree2">
            </p>
            <p>
                <label for="agree5">약관동의 *</label>
                동의합니다.&nbsp<input type="checkbox" class="checkbox" id="agree5" name="agree5">
            </p>
            <p>
                <input class="submit" type="submit">
            </p>
        </fieldset>
    </form>
</div>
</body>
</html>